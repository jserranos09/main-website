<html lang="en">
    <?php include 'inc/head.php';?>
<body>
    <?php include 'inc/nav.php';?>

<?php
  require_once('connectvars.php');

  // Start the session
  session_start();

  // Clear the error message
  $error_msg = "";

    // if user isnt logged in, see if they submitted log-in data
    if (isset($_POST['submit'])) {
      // Connect to the database
      $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

      // Grab the user-entered log-in data. // mysqli_real_escape_string is used to no special charaters are used (for security purposes). must connect to the database
      $name = mysqli_real_escape_string($dbc, trim($_POST['name']));
      $password = mysqli_real_escape_string($dbc, trim($_POST['password']));

      if (!empty($name) && !empty($password)) {
        // Look up the username and password in the database. SHA()= encrypts a peice of text into a unique 40-char text. for security purposes. 
        $query = "SELECT user_id, name FROM main WHERE name = '$name' AND password = '$password'";
        $data = mysqli_query($dbc, $query);
        // mysqli_num_rows return the number of rows in a result
        if (mysqli_num_rows($data) == 1) {
          // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
          $row = mysqli_fetch_array($data);
          // log-in the user by setting user_id and username sessions
          $_SESSION['user_id'] = $row['user_id'];
          $_SESSION['name'] = $row['name'];
          setcookie('user_id', $row['user_id'], time() + 3600);    // expires in hour
          setcookie('name', $row['name'], time() + 3600);  // expires in 1 hour
          // tells the user he is logged in
          echo 'You are now logged in ' . $name;
          $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
          header('Location: ' . $home_url);
        } else {
          // The username/password are incorrect so set an error message
          $error_msg = 'Wrong username or password.';
          echo $error_msg;
        }
      } else {
        // The username/password weren't entered so set an error message
        $error_msg = 'You must enter your username and password to log in.';
        echo $error_msg;
      }
    }
 
?>

<header class="page-header header bod4 container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12 contact">
        <h1>Log in</h1>
        <hr>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="<?php if (!empty($name)) echo $name; ?>" /><br />
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control" />
          </div>
          <input type="submit" value="Log In" name="submit" />
        </form>
      </div>
    </div>
  </div>
  </header>

    <?php include 'inc/foot.php';?>

    <?php include 'inc/javjq.php';?>
</body>
</html>


  