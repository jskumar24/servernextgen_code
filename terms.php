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
                <h2>Terms and Conditions
                </h2>
                <hr>
                <p class="py-2">Before using our services, consumers must read and accept the terms and conditions
                    listed below. However, all parties who do business with Servernexgen are subject to the terms and
                    conditions. We provide our clients with the following services:
                <ul class="px-5">
                    <li>Dedicated Hosting</li>
                    <li>VPS Hosting</li>
                    <li>Reseller Hosting</li>
                    <li>Shared Hosting</li>
                </ul>
                </p>
                <h5>Service Period</h5>
                <p class="py-2">For a period of 12 months starting on the activation date, we offer hosting services to
                    clients worldwide (these services are offered until the provided date or if the service has been
                    withdrawn earlier in accordance with the agreement) The managed hosting services will continue to
                    offer their services after the minimum service period ends until either notice is given to the
                    clients in accordance with clause 13.1, or the service is terminated in accordance with the terms of
                    the contract.</p>
                <h5>Data Restoration and Backup</h5>
                <p class="py-2">For a period of two weeks, Servernexgen will keep a backup of the Managed Hosting
                    Operating System, Applications, and File Data. Unless both parties agree to save the client’s
                    backup, the user is responsible for protecting their own apps and data that are not provided by
                    Servernexgen. For users with admin and root rights, we won’t guarantee any service pertaining to
                    data backup. We would take the required steps to retrieve the data if a backup failed. Customers
                    must be aware that Servernexgen is not liable for data loss, data theft, or data corruption. When
                    sending data or files, you must assume full responsibility for them and keep a local backup of your
                    data in case of loss or failure. Any data loss, claim, or harm brought on by accidental backup
                    failure is not our responsibility.</p>
                <h5>Usage of the disk, bandwidth, and CPU</h5>
                <h6>Permitted CPU and disk usage</h6>
                <p class="py-2">The Servernexgen has complied with the terms of the Agreement and the Acceptable Use
                    Policy in providing hosting space. The user’s website content, active emails, and web files will all
                    be stored in the shared hosting space. Media files, emails, and other content, such as those from
                    external electronic storage services, FTP hosts, will not be kept in the hosting space. In order to
                    ensure that resources are being utilised in accordance with the terms of the agreement and the
                    acceptable use policy, Servernexgen has the right to review the user’s account. The authority to
                    terminate services, impose additional fees, or remove content from websites that are deemed to
                    violate Servernexgen terms and conditions belongs to Servernexgen alone. The resources allotted to
                    the particular plan you purchased are the only ones that can be used by dedicated and VPS servers.
                </p>
                <h5>Usage of Bandwidth</h5>
                <p class="py-2">The use of bandwidth is not limited to shared hosting. Resellers, dedicated servers, and
                    VPS servers are not permitted to use more bandwidth than is allowed by the paid package. The usage
                    is visible in your control panel.</p>
                <h5>Uptime Promise</h5>
                <p class="py-2">The user may obtain a monthly credit to their account if any shared or reseller server
                    has a high downtime and fails to reach the guaranteed uptime. The planned maintenance is not covered
                    by this. The user’s justification and Servernexgen’s sole discretion are the only factors considered
                    in credit acceptance. The justification provided by third parties will not be taken into
                    consideration by Servernexgen. The time that the server and the Apache web server show as being up
                    is the server uptime; other services may report a different time.</p>
                <p class="py-1">Users can send an email to support@Servernexgen.com to submit a ticket and provide our
                    billing staff with a justification. The shared and reseller solutions are eligible for the uptime
                    guarantee. The network guarantee covers dedicated server downtime for the allotted time, and this is
                    not at all pertained to uptime guarantee.</p>
                <h5>Management and assistance</h5>
                <p class="py-2">As stated in the Service Level Agreement, we will do everything possible to have your
                    problems resolved as quickly as possible. You can get in touch with us via phone or email: For P1
                    faults, technical support is available around-the-clock, and you can phone us to report other
                    defects during regular business hours.</p>
                <h5>Servernexgen is not liable for:</h5>
                <p class="py-2">Unless both parties agree to it in advance, provide maintenance and support for
                    applications that are unrelated to Servernexgen.</p>

                <p class="py-1">Unless we have a separate agreement with you, we will: Recover any Non-Servernexgen
                    provided applications, managed hosting server, or other data in the event of a backup failure;
                    Anything that is outside the scope of the Managed Hosting Service, including uploading data that
                    exceeds the limit and data that the Managed Hosting Server generates on your behalf.</p>
                <h5>Servernexgen Responsibilities:</h5>
                <p class="py-2">What we have to do for clients without root or admin access.
                <ul class="px-5">
                    <li>
                        Provide, maintain, and continuously keep an eye on the managed hosting server
                    </li>
                    <li>
                        Track the Managed Hosting Server’s CPU, RAM, and storage usage;
                    </li>
                    <li>
                        Configure the Managed Hosting Server’s fundamental settings, including the operating system
                        and Servernexgen’s offered apps.
                    </li>
                    <li>
                        Offer technical assistance for any issues with the service;
                    </li>
                    <li>
                        Uphold the initial configuration of the Managed Hosting Service and routinely maintain,
                        upgrade, and support the operating system and Servernexgen Provided Applications.
                    </li>
                    <li>
                        As per Back-up schedule clause 12, provide backup for the operating system settings,
                        Servernexgen provided applications, and file data;
                    </li>
                    <li>
                        If the Managed Hosting Server’s fault cannot be corrected by Servernexgen, the team will
                        work quickly to resolve it and return the Managed Hosting Server to its pre-fault condition.
                    </li>
                </ul>
                </p>
                <h5>Security</h5>
                <p class="py-2">Users who violate or escalate network security privileges are subject to both criminal
                    and civil penalties. </p>
                <p class="py-1">Security violations include things like gaining unauthorised access, scanning
                    the traffic entering and leaving network systems, interrupting the services of other users, mail
                    bombing, flooding, forging TCP-IP pack headers or email header information, carrying out any other
                    network-based attacks, etc. These actions result in termination from the services and are punished
                    with security violations.</p>
                <h5>Cancellations</h5>
                <p class="py-2">At least two weeks prior to the end of the current month, the user who wishes to
                    terminate their account may do so by calling or emailing support@Servernexgen.com. For verification
                    purposes, please enclose the most recent four-digit credit card number you gave us with your
                    cancellation request. Every month on the first, the client account is renewed until and unless the
                    client requests that the account be terminated.</p>
                <h5>Inactive Services Termination</h5>
                <p class="py-2">All of our company’s inactive services that are no longer operating will end immediately
                    and without prior warning. The subsequent repercussions are not our responsibility.</p>
                <h5>Refund Procedure</h5>
                <p class="py-2">We make an effort to offer top-notch services that satisfy your business needs.
                <ul class="px-5">
                    <li>If the customer is not satisfied with our services, we offer a refund if customer initiate the
                        refund process within 7 days of purchase. Within seven business days following the processing
                        day, the refund will be paid into your bank account.</li>
                    <li>If you paid with a credit card, we will refund the money to that card using the information you
                        supplied when you signed up for our services. If you paid with a payment gateway, the money will
                        be returned to the same account.</li>
                    <li>The only people who are eligible for a refund are new account holders. For instance, you are not
                        eligible to receive a refund if you registered with us, cancelled your account, and then
                        re-registered on the website or opened a second account with us.</li>
                    <li>The administrative and installation costs associated with purchased software or domain names are
                        reduced; however, the full value of the product purchase was not refunded. Requests for refunds
                        are only considered for a period of 7 days after the date of purchase, and the sum is prorated.
                    </li>
                    <li>There is no refund for taxes that were paid on the software or service. Users can, however,
                        request their government to pay their taxes in full.</li>
                    <li>Users that use the servernexgen.com trial services are not eligible to receive claims.</li>
                    <li>When users’ services are hindered or prevented from conducting illegal operations like spam,
                        torrents, child porn, etc. on their websites, they are unable to make claims.</li>
                    <li>Refund requests can be made by users either online through our ticketing system or by email.
                        Requests for service cancellation must be sent from the email address provided at the time of
                        purchase; requests sent from any other email address will be deemed invalid. Past-due requests
                        won’t be taken into consideration.</li>
                </ul>

                </p>
                <h5>Privacy</h5>
                <p class="py-2">Servernexgen makes care to protect the customer data that was gathered. Any changes made
                    to the page will be noted here and you’ll receive an email confirming them.</p>
                <h5>Client Access</h5>
                <p class="py-2">Users are not given root or administrative access to the managed hosting server, in
                    accordance with requirements. For web servers, Servernexgen offers FTP access, and for SQL servers,
                    it offers Remote SQL access. </p>

                <p class="py-1">You are permitted to deploy and administer programmes not provided by Servernexgen if
                    you request
                    admin/root access to the Managed Hosting server. Services and support promises are implemented in
                    accordance with the customers’ selected access credentials.</p>
                <h5>Our Rights</h5>
                <p class="py-2">Managed hosting service locations are subject to change. We would let you know if there
                    were a change before a month had passed. We promise to continue offering you the same level of
                    service as before. The full cost of transferring the services is our responsibility.</p>
            </div>
        </div>
        <div class="container py-5">


        </div>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>