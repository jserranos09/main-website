<html lang="en">
    <?php include 'inc/head.php';?>
<body>
    <?php include 'inc/nav.php';?>

    <?php require_once('startsession.php'); ?>

    <!-- -fluid makes it stretch the width id the screen. container makes there always be space on both sides-->
    <header class="page-header header bods container-fluid">
        <!-- dims the bakcground-->
        <div class="overlay">
            <div class="description">
                <h1>Welcome to the Landing Page!</h1>
                <p>Today is <?php date_default_timezone_set('America/Los_Angeles'); echo date('m/d/Y'); ?></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis. Suspendisse consectetur mi id libero fringilla, in pharetra sem ullamcorper.</p>
                <button type="button" class="btn btn-dark">Click Here to learn more</button>
            </div>
        </div>
    </header>
    <div class="features">
        <!-- need the row class when creating columns to act as a container for a grid-->
        <div class="row">
          <!-- delegates what size it should revert to (bootstrap = 12)-->
          <div class="col-lg-4 col-md-4 col-sm-12">
            <h3 class="feature-title">Lorem ipsum</h3>
            <img src="https://images.pexels.com/photos/2253821/pexels-photo-2253821.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <h3 class="feature-title">Lorem ipsum</h3>
            <img src="https://images.pexels.com/photos/3540375/pexels-photo-3540375.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <h3 class="feature-title">Get in Touch!</h3>
            <!-- used to wrap around form fields for formatting-->
            <div class="form-group">
                <!-- form-control: denotes form fields such as input, text area, etc-->
                <input type="text" class="form-control" placeholder="Name" name="">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email Address" name="email">
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="4"></textarea>
            </div>
                <input type="submit" class="btn btn-secondary btn-block" value="Send" name="">         
          </div>
         </div>
        </div> 
      </div>
      <?php include 'inc/foot.php';?>
    <?php include 'inc/javjq.php';?>
</body>
</html>
