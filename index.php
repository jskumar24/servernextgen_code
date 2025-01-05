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
  <?php include "header.php" ?>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="site-navbar" role="banner">

    <!-- <div class="container">
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
                  <li><a href="#">Trading Server</a></li>
                  <li><a href="#">Tally on cloud</a></li>
                  <li class="has-children">
                    <a href="#">VPS</a>
                    <ul class="dropdown">
                      <li><a href="#">Windows</a></li>
                      <li><a href="#">Linux</a></li> 
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
    </div> -->
  </header>

  <!-- <div class="hero" style="background-image: url('images/hero_1.jpg');"></div> -->

  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-bs-pause="true" data-interval="5000">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/server-1.jpeg" alt="First Slide" style="width:100%;">

      </div>
      <div class="carousel-item">
        <img src="images/server-2.jpeg" alt="Second Slide" style="width:100%;">
      </div>
      <div class="carousel-item">
        <img src="images/server-3.jpeg" alt="Third Slide" style="width:100%;">
      </div>
    </div>

    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

    <!-- Progress Bar -->
    <div class="progress-bar">
      <div class="progress"></div>
    </div>
  </div>

  <script>
    let currentIndex = 0;
    const items = document.querySelectorAll('.carousel-item');
    const progress = document.querySelector('.progress');

    function showNextSlide() {
      items[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % items.length;
      items[currentIndex].classList.add('active');
      updateProgressBar();
    }

    function updateProgressBar() {
      const progressWidth = ((currentIndex + 1) / items.length) * 100;
      progress.style.width = progressWidth + '%';
    }

    setInterval(showNextSlide, 6000);
  </script>


  <div class="explore-menu-section pt-5 pb-5" id="exploreMenuSection">
    <div class="container-broder1">
      <div class="row">
        <div class="col-12">
          <h1 class="menu-section-heading mb-5">Plan and Pricing</h1>
        </div>

        <!-- Pricing Card 1 -->
        <div class="col-12 col-md-4 col-lg-4">
          <div class="shadow menu-item-card p-3 mb-3">
            <h2 class="item-box-h2"> Dedicated </h2>
            <div class="line-container">
              <span class="straight-line"></span>
            </div>
            <p class="item-box">Intel Xeon E3-1240v6 processor</p>
            <p class="item-box">12 GB DDR4 RAM (Shared)</p>
            <p class="item-box">2 x 1 TB Sata Hard Drive</p>
            <p class="item-box">10 TB Premium Bandwidth</p>
            <p class="item-box">
            <h3 class="item-box-p">&#8377;500/month</h3>
            </p>
            <div class="text-center">
              <a href="Signup.php"><button class="buttoneffect12">Order Now</button></a>
            </div>
          </div>
        </div>

        <!-- Pricing Card 2 -->
        <div class="col-12 col-md-4 col-lg-4">
          <div class="shadow menu-item-card p-3 mb-3">
            <h2 class="item-box-h2"> Shared </h2>
            <div class="line-container">
              <span class="straight-line"></span>
            </div>
            <p class="item-box">Intel Xeon E3-1240v6 processor</p>
            <p class="item-box">12 GB DDR4 RAM (Shared)</p>
            <p class="item-box">2 x 1 TB Sata Hard Drive</p>
            <p class="item-box">10 TB Premium Bandwidth</p>
            <p class="item-box">
            <h3 class="item-box-p">&#8377;500/month</h3>
            </p>
            <div class="text-center">
              <a href="Signup.php"><button class="buttoneffect12">Order Now</button></a>
            </div>
          </div>
        </div>

        <!-- Pricing Card 3 -->
        <div class="col-12 col-md-4 col-lg-4">
          <div class="shadow menu-item-card p-3 mb-3">
            <h2 class="item-box-h2"> VPS </h2>
            <div class="line-container">
              <span class="straight-line"></span>
            </div>
            <p class="item-box">Intel Xeon E3-1240v6 processor</p>
            <p class="item-box">12 GB DDR4 RAM (Shared)</p>
            <p class="item-box">2 x 1 TB Sata Hard Drive</p>
            <p class="item-box">10 TB Premium Bandwidth</p>
            <p class="item-box">
            <h3 class="item-box-p">&#8377;500/month</h3>
            </p>
            <div class="text-center">
              <a href="Signup.php"><button class="buttoneffect12">Order Now</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <br>
  <div class="container-broder2 bg-content1 py-10">
    <div class="row">
      <div class="col-md-6">
        <div class="big-image">
          <img src="images/3.jpg" alt="..." class="img-fluid">
        </div>
      </div>
      <div class="col-md-6">
        <p class="p-container-broder2-h2">Our Best Features</p>
        <p class="p-container-broder2-h3">
        <h4>Why is Server Nexgen the Best for Hosting Services?</h4>
        </p>
        <p class="p-container-broder2">In the society that has been experiencing technological and globalization,
          consumers have become more
          demanding. Consumers nowadays expect fast access to a great number of goods and services available without
          concerning the time period. In response to this emerging market environment, we have preemptively set up a
          24/7
          support, 365-day a year sales and systems. This kind of accessibility guarantees customers the opportunity to
          talk to our sales and support teams at their own convenient time and enable them to receive the required help
          to
          achieve their business objectives.</p>
      </div>
    </div>
  </div>

  <!-- <script>
    document.addEventListener('DOMContentLoaded', () => {
      const carousel = document.querySelector('#myCarousel');
      const progressBar = document.querySelector('.carousel-progress .progress-bar');
      const interval = carousel.getAttribute('data-interval') || 5000; // Default interval is 5000ms

      // Function to reset and restart the progress bar
      const resetProgressBar = () => {
        progressBar.style.transition = 'none'; // Disable transition for reset
        progressBar.style.width = '0%'; // Reset progress bar width

        setTimeout(() => {
          progressBar.style.transition = `width ${interval}ms linear`; // Smooth transition
          progressBar.style.width = '100%'; // Fill the progress bar
        }, 50); // Slight delay to apply reset
      };

      // Event listener for the start of slide transition
      carousel.addEventListener('slide.bs.carousel', () => {
        resetProgressBar();
      });

      // Start the progress bar on initial page load
      resetProgressBar();
    });

  </script> -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>

  <?php include "footer.php" ?>

</body>

</html>