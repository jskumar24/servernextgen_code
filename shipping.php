<?php
session_start();
require 'db_connect.php';
// Dynamic variables can be defined here
$title = "Admin Panel";
$userName = "Server NextGen";
$notificationsCount = 4;
$unreadMails = 7;
 
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css">
    <title><?php echo 'ServerNEXgen'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/main.js"></script>
</head>

<body>
    <?php include "header.php"; ?>
    <main>
        <div class="container-header-banner ">
            <h1 class=" ">Shipping and Delivery</h1> 
            <img src="images/hero_banner.PNG" alt="...">
            <div class="row"> 
                <p class="container-header-banner-h1">Shipping and Delivery</p>
                <!-- <p class="container-header-banner-p text-center f-color-car">Server Nexgen Dedicated Servers offer top-tier premium services</p> -->
            </div>
        </div>


        <div class="container py-3 my-sm-4">
            <div class="row"> 
                <h2 style="color: #0087ca;">Shipping and Delivery
                </h2>
                <hr style="color: #0087ca;">
                
                <p class="py-2 text-justify">For International buyers, orders are shipped and delivered through registered international courier companies and/or International speed post only. For domestic buyers, orders are shipped through registered domestic courier companies and /or speed post only. Orders are shipped within 0-2 days or as per the delivery date agreed at the time of order confirmation and delivering of the shipment subject to Courier Company / post office norms. Servernexgen is not liable for any delay in delivery by the courier company / postal authorities and only guarantees to hand over the consignment to the courier company or postal authorities within 0-2 days from the date of the order and payment or as per the delivery date agreed at the time of order confirmation. Delivery of all orders will be to the address provided by the buyer. Delivery of our services will be confirmed on your mail ID as specified during registration. For any issues in utilizing our services you may contact our helpdesk on or <a href="mailto:support@servernexgen.com">support@servernexgen.com</a></p>
                 
            </div>
        </div>
        <div class="container py-5"> 
             
        </div>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>