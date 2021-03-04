<html lang="en">
    <?php include 'inc/head.php';?>
<body>
    <?php include 'inc/nav.php';?>
    <!-- -fluid makes it stretch the width id the screen. container makes there always be space on both sides-->
    <header class="page-header header bod2 container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 contact">
                    <h1>Contact Me</h1>
                    <hr>
                    <!-- action="" is what happens/ what page is brought up after submitted -->
                    <form action="contact2.php" method = 'post'>
                        <div class="form-group">
                            <label name="email">Email:</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label name="subject">Subject:</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label name="Message">Message:</label>
                            <textarea type="text" name="message" id="message" class="form-control"></textarea>
                        </div>
                        <input type="submit" name="submit" value="Send Message" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </header>
    
    <?php include 'inc/foot.php';?>
    <?php include 'inc/javjq.php';?>
</body>
</html>

