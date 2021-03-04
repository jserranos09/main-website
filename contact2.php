<html lang="en">
    <?php include 'inc/head.php';?>
<body>
    <?php include 'inc/nav.php';?>
<!-- -fluid makes it stretch the width id the screen. container makes there always be space on both sides-->
<header class="page-header header container-fluid">
    <div class="container">
        <div style="background-image: url('https://images.pexels.com/photos/5064926/pexels-photo-5064926.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500');">
            <div class="overlay">
                <div class="description">
                    <?php
                    
                        $email = $_POST['email'];
                        $subject = $_POST['subject']; 
                        $message = $_POST['message'];    

                        $to = 'jserranos2012@gmail.com' ;
                        $subject = 'Contact me website' ;
                        $msg = "You have a contact request about $subject. \n" . 
                            "There email is: $email.\n";
                            "There sent $message";
                        // checks input if its data and is an email                                     
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                            // checks to see if 'email' was succesfully submitted 
                            if(filter_has_var(INPUT_POST, 'email')){
                                echo '<p class="custom-style">' . 'Submission sucessful' . '<br>' . 'Thanks for contacting me';
                            } else {
                                echo '<p class="custom-style">' . 'No Data' .'<br>';
                            }
                        } else {
                            echo '<p class="custom-style">' . 'Email not sent';
                            echo '<p class="custom-style">' . "$email is not a vaild email, please try again";
                        }

                        // mail(where to send, the subject, message, where sent from). sends the email
                        mail($to, $subject, $msg) ;
                    ?>       
                </div>
            </div>
        </div>    
    </div>
</header>
    
    <?php include 'inc/foot.php';?>
    <?php include 'inc/javjq.php';?>
</body>
</html>
