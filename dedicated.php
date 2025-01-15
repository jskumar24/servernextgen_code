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
        <div class="container-image py-5 px-xl-6">
        </div>

        <div class="container px-1">
            <!-- <p class="text-left f-4">Dedicated Servers</p> -->
        </div>
        <div class="container py-5">
            <h3 class="text-center py-3">Dedicated Servers Plans</h3>
            <div class="table-container">
                <div class="row row-cols-xl-7 font-weight-bold table-header">
                    <div class="table-column">CPU</div>
                    <div class="table-column">CORE</div>
                    <div class="table-column">RAM</div>
                    <div class="table-column">STORAGE</div>
                    <div class="table-column">BANDWIDTH</div>
                    <div class="table-column">PRICE</div>
                    <div class="table-column"></div>
                </div>

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
                                <button class="button-div px-0">Order Now</button>
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