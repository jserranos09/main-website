<?php require_once('startsession.php'); ?>
<!--sets when the navigation bar expands from vertical or hamburger. set it to medium-->
<nav class="navbar navbar-expand-md">
    <!-- used fir website branding. can include a logo image-->
    <a class="navbar-brand" href="/mainwebsite/index.php">Logo</a>
    <?php
        if (isset($_SESSION['name'])) {
            echo 'Welcome ' . $_SESSION['name'] . '</a>';
        }
    ?>

    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
    <!-- creates the icon users click on small screens-->        
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/mainwebsite/viewprofile.php">My Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mainwebsite/login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mainwebsite/account.php">Create Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mainwebsite/index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mainwebsite/about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mainwebsite/contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mainwebsite/logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>



