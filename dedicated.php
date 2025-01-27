<?php
session_start();
require 'db_connect.php';
// Dynamic variables can be defined here
$title = "Admin Panel";
$userName = "Server NextGen";
$notificationsCount = 4;
$unreadMails = 7;


// Fetch plans from the database
$sql = "SELECT * FROM tbl_dedicated_vps where plan_type = 'Dedicated'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$plans = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
        <div class="container-image py-5 ">
            <div class="row">
                <!-- <img src="images/13.png" width="100%"> -->
                <!-- <p>
                    Dedicated Server
                </p> -->
            </div>
        </div>

        <div class="container py-3 my-sm-4">
            <div class="row row-cols-xl-2">
                <div class="table-column"><img src="images/dedicated-server.gif" width="100%"></img></div>
                <div class="table-column">
                    <p class="py-1 text-justify">Hosted in an Indian Tier-4 datacenter, our Server Nexgen Dedicated
                        Servers provide
                        top-tier premium benefits at an unrivaled price with an astounding 99.995% uptime guarantee.
                        Make
                        that the equipment can still operate safely in the case of a mechanical failure. High security
                        standards prove safety, complete redundancy and the capability of fault tolerance minimize the
                        risks
                        of unavailability.</p>
                    <h3>All operating systems are supported:</h3>
                    <p class="py-1 text-justify">Our premium dedicated servers are perfectly compatible with almost any
                        OS, so if
                        your
                        business requires robust and scalable hardware, you’ve came to the right place. This
                        compatibility
                        provides the base to install any operated system desired whether it is any edition of windows or
                        Linux. In addition, we also offer multiple servers that support varieties of virtualization
                        systems
                        like VMware ESXi, Microsoft Windows Hypervisor, Kernel-based Virtual Machine, Solus Virtual
                        Machine
                        Manager, Citrix Hypervisor, and Oracle Solaris Containers. These servers are located on a
                        premium
                        datacenter in India to ensure it works as expected to safeguard your information.</p>
                    </di>
                </div>
            </div>
            <div class="container py-3">
                <h3 class="text-center py-3">Dedicated Servers Plans</h3>
                <div class="table-container">
                    <!-- <div class="row row-cols-xl-7 font-weight-bold table-header">
                        <div class="table-column">CPU</div>
                        <div class="table-column">CORE</div>
                        <div class="table-column">RAM</div>
                        <div class="table-column">STORAGE</div>
                        <div class="table-column">BANDWIDTH</div>
                        <div class="table-column">PRICE</div>
                        <div class="table-column"></div>
                    </div> -->

                    <?php if (!empty($plans)): ?>
                        <?php foreach ($plans as $row): ?>
                            <div class="row row-cols-xl-7 text-hover table-row">
                                <div class="table-column"><?php echo htmlspecialchars($row["cpu"]); ?></div>
                                <div class="table-column"><?php echo htmlspecialchars($row["cpu_cores"]); ?></div>
                                <div class="table-column"><?php echo htmlspecialchars($row["cpu_ram"]); ?></div>
                                <div class="table-column"><?php echo htmlspecialchars($row["harddisk_space"]); ?></div>
                                <div class="table-column"><?php echo htmlspecialchars($row["bandwidth"]); ?></div>
                                <div class="table-column" style="font-weight: bold; color:rgb(81, 149, 222);">
                                    &#8377;<?php echo htmlspecialchars($row["plan_price"]); ?>
                                </div>
                                <div class="table-column">
                                    <a href="checkout.php"><button class="button-div px-0">Order Now</button></a>
                                </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-center">No results found</p>
                    <?php endif; ?>
                </div>
            </div>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>