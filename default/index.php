<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="trini809">
    <title>Opus Belli - Your Information Technologies Partner</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- site css -->
    <link rel="stylesheet" href="css/main.css" />
  </head>

  <body>
    <header>
      <div class="container">
        <div class="row logo">
          <div class="col-sm-6">
            <a href="index.php"><img src="img/OpusBelli-S.png" id="site-logo" /></a>
          </div>
          <div class="col-sm-6 switch-elem">
            <div>Current Mode</div>
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
          </div>
        </div>
      </div>
    </header>

    <div id="menu-container">
      <nav id="navigation" class="navbar navbar-expand-lg opus-nav">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="about nav-item">
                <a class="nav-link" href="index.php">About Us</a>
              </li>
              <li class="offering nav-item">
                <a class="nav-link" href="#">Offering</a>
              </li>
              <li class="biographies nav-item">
                <a class="nav-link" href="#">Biographies</a>
              </li>
              <li class="speakers-corner nav-item">
                <a class="nav-link" href="#">Speakers Corner</a>
              </li>
              <li class="contact nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
          </div>
      </div>
      </nav>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 rights-reserved">
            &copy; Copyright <?php echo date('Y'); ?> Opus Belli - Your Information Technologies Partner. All rights reserved.
          </div>
          <div class="col-sm-4">
            <div class="copyright">
              <!--  -->
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
