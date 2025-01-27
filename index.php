<?php
// Get the current file name
$current_page = basename($_SERVER['PHP_SELF']);
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
  <main>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-bs-pause="true" data-interval="5000">

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/dedicated-hosting.png" alt="First Slide" style="width:100%;">
          <div class="carousel-caption">
            <div class="container px-0 py-0">
              <div class="card-car">
                <div class="card-body-car px-0">
                  <h3 class="card-title-car text-left f-color-car">Dedicated Server</h3>
                  <p class="card-text-car text-left f-color-car" style="text-wrap: wrap;">Secure and scalable
                    dedicated
                    server hosting to drive your Online success
                    for a low price.</p>
                </div>
              </div>
              <div class="container"><button class="button-car"> More Details</button></div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/shared-hosting.png" alt="Second Slide" style="width:100%;">
          <div class="carousel-caption">
            <div class="container px-0 py-0">
              <div class="card-car">
                <div class="card-body-car px-0">
                  <h3 class="card-title-car text-left f-color-car">Share hosting</h3>
                  <p class="card-text-car text-left f-color-car" style="text-wrap: wrap;">Secure and scalable dedicated
                    server hosting
                    to drive your Online success for a low price.</p>
                </div>
              </div>
              <div class="container"><button class="button-car"> More Details</button></div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/vps-hosting.png" alt="Third Slide" style="width:100%;">
          <div class="carousel-caption">
            <div class="container px-0 py-0">
              <div class="card-car">
                <div class="card-body-car px-0">
                  <h3 class="card-title-car text-left f-color-car">VPS</h3>
                  <p class="card-text-car text-left f-color-car" style="text-wrap: wrap;">Our expertise is scalable and
                    easily upgradeable: What Sets Us Apart From
                    Other Hosting Platforms.</p>
                </div>
              </div>
              <div class="container"><button class="button-car"> More Details</button></div>
            </div>
          </div>
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
        <div class="progress" style="background-color:#b3b3b3;"></div>
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

      setInterval(showNextSlide, 3000);
    </script>

    <div class="container-banner1">
      <div class="container">
        <div class="row">
          <div class="col-12 py-4 text-center">
            <h1>Hosting for Every Website</h1>
          </div>

          <!-- Pricing Card 1 -->
          <div class="col-12 col-md-4 col-lg-4 py-4">
            <div class="shadow-lg mb-3 p-4 item-card">
              <h2 class="text-center"> Dedicated </h2>
              <div class="line-container">
                <span class="straight-line"></span>
              </div>
              <p class="text-center p-1">Intel Xeon E3-1240v6 processor</p>
              <p class="text-center p-1">12 GB DDR4 RAM (Shared)</p>
              <p class="text-center p-1">2 x 1 TB Sata Hard Drive</p>
              <p class="text-center p-1">10 TB Premium Bandwidth</p>
              <p class="text-center">
              <h3 class="text-center f-3">&#8377;500/mo</h3>
              </p>
              <div class="text-center">
                <a href="checkout.php"><button class="button">Order Now</button></a>
              </div>
            </div>
          </div>

          <!-- Pricing Card 2 -->
          <div class="col-12 col-md-4 col-lg-4 py-4">
            <div class="shadow-lg mb-3 p-4 item-card">
              <h2 class="text-center"> Shared </h2>
              <div class="line-container">
                <span class="straight-line"></span>
              </div>
              <p class="text-center p-1">Intel Xeon E3-1240v6 processor</p>
              <p class="text-center p-1">12 GB DDR4 RAM (Shared)</p>
              <p class="text-center p-1">2 x 1 TB Sata Hard Drive</p>
              <p class="text-center p-1">10 TB Premium Bandwidth</p>
              <p class="text-center">
              <h3 class="text-center f-3">&#8377;500/mo</h3>
              </p>
              <div class="text-center">
                <a href="checkout.php"><button class="button">Order Now</button></a>
              </div>
            </div>
          </div>

          <!-- Pricing Card 3 -->
          <div class="col-12 col-md-4 col-lg-4 py-4">
            <div class="shadow-lg mb-3 p-4 item-card">
              <h2 class="text-center"> VPS </h2>
              <div class="line-container">
                <span class="straight-line"></span>
              </div>
              <p class="text-center p-1">Intel Xeon E3-1240v6 processor</p>
              <p class="text-center p-1">12 GB DDR4 RAM (Shared)</p>
              <p class="text-center p-1">2 x 1 TB Sata Hard Drive</p>
              <p class="text-center p-1">10 TB Premium Bandwidth</p>
              <p class="text-center">
              <h3 class="text-center f-3">&#8377;500/mo</h3>
              </p>
              <div class="text-center">
                <a href="checkout.php"><button class="button">Order Now</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-banner2">
      <div class="container py-5 my-sm-4">
        <div class="row">
          <div class="col-md-6">
            <div class="big-image">
              <img src="images/share-host.png" alt="..." class="img-fluid">
            </div>
          </div>
          <div class="col-md-6">
            <!-- <p class="text-center f-4 f-color-car">Our Best Features</p> -->
            <p class="text-justify f-2 f-color-car">
              Why is Server Nexgen the Best for Hosting Services?
            </p>
            <p class="text-justify f-color-car">In the society that has been experiencing technological and
              globalization,
              consumers have become more
              demanding. Consumers nowadays expect fast access to a great number of goods and services available without
              concerning the time period. In response to this emerging market environment, we have preemptively set up a
              24/7
              support, 365-day a year sales and systems. This kind of accessibility guarantees customers the opportunity
              to
              talk to our sales and support teams at their own convenient time and enable them to receive the required
              help
              to
              achieve their business objectives.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-banner1">
      <div class="container" style="box-sizing: border-box;">
        <div class="row  align-items-center">
          <p class="text-center f-3">ServerNEXgen Guarantees</p>
          <div class="line-container">
            <span class="straight-line"></span>
          </div>
          <div class="con-gaurantee ">
            <div class="box-gaurantee  align-items-center">
              <div class="px-3">
                <img src="images/moneyback.svg" width="50%" height="30%" alt="..." class="img-fluid align-items-center">
              </div>
              <h6 class="py-2 text-left">Money Back Guarantee</h6>
              <p class="text-center">Enjoy peace of mind with our hassle-free money-back guarantee on all plans.</p>
            </div>
            <div class="box-gaurantee">
              <div class="px-3">
                <img src="images/27_support.svg" width="50%" height="30%" alt="..." class="img-fluid">
              </div>
              <h6 class="py-3 text-left">24/7 Support</h6>
              <p class="text-left">Get expert assistance anytime with our round-the-clock customer support.</p>
            </div>
            <div class="box-gaurantee">
              <div class="px-3">
                <img src="images/cloudtech.svg" width="50%" height="30%" alt="..." class="img-fluid">
              </div>
              <h6 class="py-3 text-left">Cloud Technology</h6>
              <p class="text-left">Experience unmatched scalability and reliability with cutting-edge cloud
                infrastructure.</p>
            </div>
            <div class="box-gaurantee">
              <div class="px-3">
                <img src="images/fast_ssd_server.svg" width="50%" height="30%" alt="..." class="img-fluid">
              </div>
              <h6 class="py-3 text-left">Fast SSD Server</h6>
              <p class="text-left">Boost performance with ultra-fast SSD servers for lightning-quick load times.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-banner2">
       <p class="text-center f-3 f-color-car">Our Best Features</p>
       <div class="line-container">
            <span class="straight-line"></span>
          </div>
      <div class="container row col-12">
        <!-- <div class="row row-col-12 align-items-center"> -->          
          <div class="col-md-2">
            <img src="images/Free-SSL-B.svg" width="60%" height="25%" alt="..." class="py-3 card-img-top">
            <h7 class="text-left f-color-car">Free SSL certificate</h7>
          </div>
          <div class="col-md-2">
              <img src="images/support-B.svg" width="35%" height="30%" alt="..." class="img-fluid">
            </div>
            <h6 class="px-5 text-center f-color-car">24/7 support Guarantee</h6>
          </div>
          <div class="col-2 ">
            <div class="">
              <img src="images/ssd-drives-B-1.svg" width="35%" height="30%" alt="..." class="img-fluid">
            </div>
            <h6 class="px-5 text-center f-color-car">SSD drivers for all plans</h6>
          </div>
          <div class="col-2 ">
            <div class="">
              <img src="images/latest-speed-B.svg" width="35%" height="30%" alt="..." class="img-fluid">
            </div>
            <h6 class="px-5 text-center f-color-car">Latest speed technologies</h6>
          </div>
          <div class="col-2">
            <div class="">
              <img src="images/moststable-B.svg" width="35%" height="30%" alt="..." class="img-fluid">
            </div>
            <h6 class="px-3 text-center f-color-car">The most stable platform</h6>
          </div>
          <div class="col-2 ">
            <div class="">
              <img src="images/OneClickinstall-B.svg" width="35%" height="30%" alt="..." class="img-fluid">
            </div>
            <h6 class="px-5 text-center f-color-car">One click install scripts</h6>
          </div>
        </div>
      <!-- </div> -->
    </div>
    <div class="container-dummy">
      <br>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </main>

  <?php include "footer.php" ?>

</body>

</html>