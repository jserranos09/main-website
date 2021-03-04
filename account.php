<html lang="en">
    <?php include 'inc/head.php';?>
<body>
    <?php include 'inc/nav.php';?>

    <?php require_once('startsession.php'); ?>

<?php
    require_once('connectvars.php');

    if (isset($_POST['submit'])) {
        // sets the info data from the POST
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        if (!empty($name) && !empty($email) && !empty($password) && !empty($password2)) {
            if ($password == $password2) {
                $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                    or die("connect to server didn't work");
                // writes data into the database. id column gets auto set so the "0" gets ignored 
                $query = "INSERT INTO main VALUES (0, '$name', '$email', '$password')";
                mysqli_query($dbc, $query);
                // confirms success with the user
                echo '<p>Thanks for creating an account</p>';
                // Clear the score data to clear the form
                $name = "";
                $email = "";
                $password = "";
                $password2 = "";

                mysqli_close($dbc);
            } else {
                echo '<h5 class="container error">Passwords are not the same</h5>';
            }
        } else {
            echo '<h5 class="container error">Please fill in all of the information to create your account</h5>';
        }

    }
?>

<header class="page-header header bod2 container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 contact">
                <h1>Create your account</h1>
                <!-- action="" is what happens/ what page is brought up after submitted. referencing itself -->
                <form method ='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <a href="/mainwebsite/login.php">Already have an account? Click here to login</a>
                    <div class="form-group">
                        <label name="subject">Name:</label>
                        <!-- keeps the words in the field so they dont have to reputting the info in-->
                        <input type="text" id="name" name="name" class="form-control" value="<?php if (!empty($name)) echo $name; ?>" />
                    </div>
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input type="text" id="email" name="email" class="form-control" value="<?php if (!empty($email)) echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label name="Message">Password:</label>
                        <input type="text" name="password" id="password" class="form-control" ></input>
                    </div>
                    <div class="form-group">
                        <label name="Message">Confirm Password:</label>
                        <input type="text" name="password2" id="password2" class="form-control"></input>
                    </div>
                    <input type="submit" name="submit" value="Create Account" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
</header>
    
    <?php include 'inc/foot.php';?>
    <?php include 'inc/javjq.php';?>
</body>
</html>


