<html lang="en">
    <?php include 'inc/head.php';?>
<body>
    <?php include 'inc/nav.php';?>

<?php
  require_once('connectvars.php');
    // Start the session
  require_once('startsession.php');

  // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['user_id'])) {
    echo '<p class="login">Please <a href="login.php">log in</a> to access this page.</p>';
    exit();
  }
  ?>
  <header class="header">
    <?php
    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Grab the profile data from the database
    if (!isset($_GET['user_id'])) {
        $query = "SELECT name, email, password FROM main WHERE user_id = '" . $_SESSION['user_id'] . "'";
    } else {
        $query = "SELECT name, email, password FROM main WHERE user_id = '" . $_GET['user_id'] . "'";
    }
    $data = mysqli_query($dbc, $query);
    // checks to see if the query worked and that theres data
    if (mysqli_num_rows($data) == 1) {
        // row gets the array of the query
        $row = mysqli_fetch_array($data);
        echo '<table>';
        if (!empty($row['name'])) {
        echo '<tr><td class="label">Name:</td><td>' . $row['name'] . '</td></tr>';
        }
        if (!empty($row['email'])) {
        echo '<tr><td class="label">Email:</td><td>' . $row['email'] . '</td></tr>';
        }
        if (!empty($row['password'])) {
        echo '<tr><td class="label">password:</td><td>' . $row['password'] . '</td></tr>';
        }
        echo '</table>';
    } // End of check for a single row of user results
    else {
        echo '<p class="error">There was a problem accessing your profile.</p>';
    }
    ?>
  </header>

  <?php mysqli_close($dbc); ?>
    
    <?php include 'inc/foot.php';?>
    <?php include 'inc/javjq.php';?>
</body>
</html>





