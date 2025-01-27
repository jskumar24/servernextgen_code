<?php
session_start();
require 'db_connect.php';
// Dynamic variables can be defined here
$title = "Admin Panel";
$userName = "Server NextGen";
$notificationsCount = 4;
$unreadMails = 7;


// Fetch plans from the database
$sql = "SELECT * FROM tbl_shared_hosting";
//  where plan_name like 'Enterprise%'";
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
        <div class="container-image py-5 px-xl-6">
        </div>

        <div class="container px-1">
        </div>
        <div class="container py-5">
            <div class="row row-cols-xl-2">
                <div class="table-column "><img src="images/share-host.png" width="70%"></img></div>
                <div class="table-column">
                    <p class="py-1 text-justify">Hosted in an Indian Tier-4 datacenter, our Server Nexgen Dedicated Servers provide
                        top-tier premium benefits at an unrivaled price with an astounding 99.995% uptime guarantee.
                        Make
                        that the equipment can still operate safely in the case of a mechanical failure. High security
                        standards prove safety, complete redundancy and the capability of fault tolerance minimize the
                        risks
                        of unavailability.</p>
                    <h3>All operating systems are supported:</h3>
                    <p class="py-1 text-justify">Our premium dedicated servers are perfectly compatible with almost any OS, so if
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
            <h3 class="text-center py-3">Shared Hosting</h3>
            <div class=" py-5 px-5">
                <div class="row row-cols-xl-3 font-weight-bold">
                    <?php if (!empty($plans)): ?>
                        <?php foreach ($plans as $row): ?>
                            <div class="col-12 col-md-2 col-lg-4 table-column">
                                <div class="shadow-lg mb-3 p-4 item-card">
                                    <h2 class="text-center" style="color: rgb(214, 214, 214);">
                                        <?php echo htmlspecialchars($row["plan_name"]); ?>
                                    </h2>
                                    <div class="line-container">
                                        <span class="straight-line"></span>
                                    </div>
                                    <p class="text-center p-1"><?php echo htmlspecialchars($row["website_count"]); ?> Website</p>
                                    <p class="text-center p-1"><?php echo htmlspecialchars($row["harddisk_space"]); ?> Storage Space
                                    </p>
                                    <p class="text-center p-1"><?php echo htmlspecialchars($row["bandwidth"]); ?> Bandwith</p>
                                    <p class="text-center p-1"><?php echo htmlspecialchars($row["databases_count"]); ?> Databases
                                    </p>
                                    <p class="text-center p-1"><?php echo htmlspecialchars($row["users_count"]); ?> Users</p>
                                    <p class="text-center p-1"><?php echo htmlspecialchars($row["email_accounts_count"]); ?> Emails
                                    </p>
                                    <p class="text-center">
                                    <h3 class="text-center f-3" style="color: #0dcaf0;">
                                        &#8377;<?php echo htmlspecialchars($row["plan_price"]); ?>/mo
                                    </h3>
                                    </p>
                                    <div class="text-center">
                                        <a href="checkout.php"><button class="button">Order Now</button></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-center">No results found</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>