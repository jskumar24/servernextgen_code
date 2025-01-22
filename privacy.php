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
                <h2 style="color: #0087ca;">Privacy Policy
                </h2>
                <hr style="color: #0087ca;">
                <h5>Use of Personal Information</h5>
                <p class="py-2 text-justify">Servernexgen makes a strong effort to safeguard and uphold the highest levels of confidentiality with regard to any personally identifiable information you give us or that we obtain from you. We want you to know that we value your privacy greatly. Your email address, zip code, phone number, and other important facts will not be shared, lent, exchanged, sold, or otherwise made available to any third parties without your consent. We have full permission to use the data internally to improve website functionality, create new features, improve customer experience, track your order, and do other offline business operations. The information in our logs is used or disclosed at our discretion.</p>
                <h5>Personal Information Disclosure</h5>
                <p class="py-2 text-justify">In order to improve its services, Servernexgen will publish personally identifiable information (such as name, company, city, and country), customer reviews, and comments about the company in its marketing materials and on its official website. We decide when to disclose the information contained in such records. Customers have the ability to revoke our authorization at any time by sending a written notice. We only share personal information with dependable partners or where required by law or a duly issued court order.</p>
                <h5>Disclosure of Non-Personal Aggregates</h5>
                <p class="py-2 text-justify">Servernexgen uses the services of the rightful third parties to carry out a number of our business operations on our behalf, including shipping, web hosting, payment processing, marketing, data management, and so on. If it’s necessary for the task to be done, we may disclose the non-personal aggregate information about users with partners or other parties. The information is solely limited to use for the purposes specified by Servernexgen and our third parties are not allowed to use it for their own purposes. For instance, we might divulge the demographic data of users from a particular region. The data is supplied just for statistical analysis; the consumers’ identities will not be made public.</p>
                <h5>Data Security</h5>
                <p class="py-2 text-justify">The duty to safeguard the private and confidential information given to Servernexgen rests with us. We have both physical and electronic security mechanisms to prevent theft and information getting into the wrong hands. This information was collected by our website for users of our services. Using Secure Socket Layers (SSL) encryption technology, we safeguard data sent over the internet. Despite our best attempts, there is a danger that attackers employing the ever advancing technology will spy on our information. We are not liable for all such accidental data theft.</p>
            </div>
        </div>
        <div class="container py-5">
            <h3 class="text-center py-3">VPS Windows Plans</h3>

        </div>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>