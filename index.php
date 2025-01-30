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
</head>

<body>
  <?php include "header.php" ?>
  <main>
    <div id="myCarousel" class="carousel slide myCarousel" data-ride="carousel" data-interval="false">
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
              <h3 class="container-banner-h3-d">Dedicated Server</h3>
              <p class="container-banner-p " style="text-wrap: wrap;">Secure and
                scalable
                dedicated
                server hosting to drive your Online success
                for a low price.</p>
              <button class="container-banner-b button-car"> More Details</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/shared-hosting.png" alt="Second Slide" style="width:100%;">
          <div class="carousel-caption">
            <div class="container px-0 py-0">
              <h3 class="container-banner-h3">Share Hosting</h3>
              <p class="container-banner-p" style="text-wrap: wrap;">Secure and
                scalable dedicated
                server hosting
                to drive your Online success for a low price.</p>
              <button class="container-banner-b button-car"> More Details</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/vps-hosting.png" alt="Third Slide" style="width:100%;">
          <div class="carousel-caption">
            <div class="container px-0 py-0">
              <h3 class="container-banner-h3-v">VPS</h3>
              <p class="container-banner-p" style="text-wrap: wrap;">Secure and
                scalable dedicated
                server hosting
                to drive your Online success for a low price.</p>
              <button class="container-banner-b button-car"> More Details</button>
            </div>
          </div>
        </div>
      </div>


      <hr class="transition-timer-carousel-progress-bar" />
      <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <script>
      $(document).ready(function () {
        var percent = 0,
          interval = 38,//it takes about 6s, interval=20 takes about 4s
          $bar = $('.transition-timer-carousel-progress-bar'),
          $crsl = $('#myCarousel');
        // $('.carousel-indicators li, .carousel-control').click(function () { $bar.css({ width: 0.5 + '%' }); });
        /*line above just for showing when controls are clicked the bar goes to 0.5% to make more friendly, 
        if you want when clicked set bar empty, change on width:0.5 to width:0*/
        // $crsl.carousel({//initialize
        //   interval: false,
        //   pause: true
        // }).on('slide.bs.carousel', function () { percent = 0; });//This event fires immediately when the bootstrap slide instance method is invoked.
        function progressBarCarousel() {
          $bar.css({ width: percent + '%' });
          percent = percent + 0.5;
          if (percent >= 100) {
            percent = 0;
            $crsl.carousel('next');
          }
        }
        var barInterval = setInterval(progressBarCarousel, interval);//set interval to progressBarCarousel function
        if (!(/Mobi/.test(navigator.userAgent))) {//tests if it isn't mobile
          $crsl.hover(function () {
            clearInterval(barInterval);
          },
            function () {
              barInterval = setInterval(progressBarCarousel, interval);
            }
          );
        }
      }); 
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
            <p class="py-5 text-justify f-2 f-color-car">
              Why is Server Nexgen the Best for Hosting Services?
            </p>
            <p class=" text-justify f-color-car">In the society that has been experiencing technological and
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
    <div class="container mb-4"> </div>
    <div class="container-banner1">
      <div class="container mb-4">
        <div class="row">
          <p class="text-center f-3">ServerNEXgen Guarantees</p>
          <div class="line-container">
            <span class="straight-line"></span>
          </div>
          <div class="col">
            <img src="images/moneyback.svg" width="35%" height="30%" alt="..." class="py-2">
            <h3 class="f-1">Money Back Guarantee</h3>
            <p class="text-left">Enjoy peace of mind with our hassle-free money-back guarantee on all plans.</p>
          </div>
          <div class="col">
            <img src="images/27_support.svg" width="35%" height="30%" alt="..." class="py-2">
            <h3 class="f-1">24/7 Support</h3>
            <p class="text-left">Get expert assistance anytime with our round-the-clock customer support.</p>
          </div>
          <div class="col">
            <img src="images/cloudtech.svg" width="35%" height="30%" alt="..." class="py-2">
            <h3 class="f-1">Cloud Technology</h3>
            <p class="text-left">Experience unmatched scalability and reliability with cutting-edge cloud
              infrastructure.</p>
          </div>
          <div class="col">
            <img src="images/fast_ssd_server.svg" width="35%" height="30%" alt="..." class="py-2">
            <h3 class="f-1">Fast SSD Server</h3>
            <p class="text-left">Enjoy peace of mind with our hassle-free money-back guarantee on all plans.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-4"> </div>
    <div class="container-banner2">
      <div class="container mb-4">
        <div class="row">
          <p class="text-center f-3 f-color-car">Our Best Features</p>
          <div class="line-container">
            <span class="straight-line"></span>
          </div>
          <div class="col">
            <img src="images/Free-SSL-B.svg" width="60%" height="40%" alt="..." class="py-2">
            <h3 class="f-1 f-color-car">Free SSL certificate</h3>
          </div>
          <div class="col">
            <img src="images/support-B.svg" width="60%" height="40%" alt="..." class="py-2">
            <h3 class="f-1 f-color-car">24/7 support Guarantee</h3>
          </div>
          <div class="col">
            <img src="images/ssd-drives-B-1.svg" width="60%" height="40%" alt="..." class="py-2">
            <h3 class="f-1 f-color-car">SSD drivers for all plans</h3>
          </div>
          <div class="col">
            <img src="images/latest-speed-B.svg" width="60%" height="40%" alt="..." class="py-2">
            <h3 class="f-1 f-color-car">Latest speed technologies</h3>
          </div>
          <div class="col">
            <img src="images/moststable-B.svg" width="60%" height="40%" alt="..." class="py-2">
            <h3 class="f-1 f-color-car">The most stable platform</h3>
          </div>
          <div class="col">
            <img src="images/OneClickinstall-B.svg" width="60%" height="40%" alt="..." class="py-2">
            <h3 class="f-1 f-color-car">One click install scripts</h3>
          </div>
        </div>
      </div>
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