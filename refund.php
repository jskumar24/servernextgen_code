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
        <div class="container-image py-5 px-xl-6">
        </div>


        <div class="container py-3 my-sm-4">
            <div class="row">
                <h2 style="color: #0087ca;">Refund and Cancellation Policy</h2>
                <hr style="color: #0087ca;">
                <h5>Cancellations</h5>
                <p class="py-2">At least two weeks prior to the end of the current month, the user who wishes to
                    terminate their account may do so by calling or emailing <a
                        href="mailto:support@servernexgen.com">support@servernexgen.com</a>. Every month on the first,
                    the client account is renewed until and unless the client requests that the account be terminated.
                </p> 
                <h5>Refund Procedure</h5> 
                <p class="py-2">We make an effort to offer top-notch services that satisfy your business needs.</p>
                <ul class="px-5"> 
                    <li class="py-1"> 
                        If the customer is not satisfied with our services, we offer a refund if
                        customer initiate the refund process within 7 days of purchase. Within seven
                        business days following the processing day, the refund will be paid into your bank account.
                    </li>
                     <li class="py-1"> 
                        If you paid with a credit card, we will refund the money to that card using the
                        information you supplied when you signed up for our services. If you
                        paid with a payment gateway, the money will be returned to the same account.
                    </li>
                    <li class="py-1"> 
                        The only people who are eligible for a refund are new account holders. For
                        instance, you are not eligible to receive a refund if you registered with
                        us, cancelled your account, and then re-registered on the website or opened a second account
                        with us.
                    </li>
                    <li class="py-1"> 
                        The administrative and installation costs associated with purchased software or
                        domain names are reduced; however, the full value of the product
                        purchase was not refunded. Requests for refunds are only considered for a period of 7 days
                        after the date of purchase, and the sum is prorated.
                    </li>
                    <li class="py-1"> 
                        There is no refund for taxes that were paid on the software or service. Users
                        can, however, request their government to pay their taxes in full.
                    </li>
                     <li class="py-1"> 
                        Users that use the servernexgen.com trial services are not eligible to receive
                        claims.
                    </li>
                     <li class="py-1"> 
                        When users’ services are hindered or prevented from conducting illegal
                        operations like spam, torrents, child porn, etc. on their websites, they are
                        unable to make claims.
                    </li>
                     <li class="py-1"> 
                        Refund requests can be made by users either online through our ticketing system
                        or by email. Requests for service cancellation must be sent from the
                        email address provided at the time of purchase; requests sent from any other email address
                        will be deemed invalid. Past-due requests won’t be taken into
                        consideration.
                    </li>
                </ul>
            </div>
        </div> 
    </main>
    <?php include "footer.php"; ?>
</body>

</html>