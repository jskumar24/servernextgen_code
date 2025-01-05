<?php
// Dynamic server-side content setup if needed
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

 <title><?php echo 'ServerNEXgen'; ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <style>
    /* Custom CSS for the progress bar */
    .progress {
      top: 0;
      left: 0;
      right: 0;
      margin-top: 6rem;
    }
  </style> -->
</head>

<body>


  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="site-navbar" role="banner">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-11 col-xl-2">
          <h1 class="mb-0 site-logo"><a href="index.php" class="text-white mb-0">ServerNEXgen</a></h1>
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="index.php"><span>Home</span></a></li>
              <li><a href="aboutus.php"><span>About us</span></a></li>
              <li class="has-children">
                <a href="index.php"><span>Hosting</span></a>
                <ul class="dropdown arrow-top">
                  <li><a href="dedicated.php">Dedicated</a></li>
                  <li><a href="sharedhosting.php">Shared Hosting</a></li>
                  <li class="has-children">
                    <a href="#">VPS</a>
                    <ul class="dropdown">
                      <li><a href="#">Windows</a></li>
                      <li><a href="#">Linux</a></li>
                      <!-- <li><a href="#">Menu Three</a></li>
                        <li><a href="#">Menu Four</a></li> -->
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="has-children">
                <a href="about.php"><span>Solutions</span></a>
                <ul class="dropdown arrow-top">
                  <li><a href="#">Trading Server</a></li>
                  <li><a href="#">Tally on cloud</a></li>
                </ul>
              </li>
              <li><a href="contact.php"><span>SAP Services</span></a></li>
              <li><a href="contact.php"><span>Contact</span></a></li>
            </ul>
          </nav>
        </div>


        <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#"
            class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

      </div>

    </div>
    </div>

  </header> 

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>
</body>

</html>