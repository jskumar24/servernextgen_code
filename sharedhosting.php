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
            <h3 class="text-center py-3">Shared Hosting</h3>
            <div class="table-container py-5 px-5">
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
                                    <p class="text-center"><?php echo htmlspecialchars($row["website_count"]); ?> Website</p>
                                    <p class="text-center"><?php echo htmlspecialchars($row["harddisk_space"]); ?> Storage Space
                                    </p>
                                    <p class="text-center"><?php echo htmlspecialchars($row["bandwidth"]); ?> Bandwith</p>
                                    <p class="text-center"><?php echo htmlspecialchars($row["databases_count"]); ?> Databases
                                    </p>
                                    <p class="text-center"><?php echo htmlspecialchars($row["users_count"]); ?> Users</p>
                                    <p class="text-center"><?php echo htmlspecialchars($row["email_accounts_count"]); ?> Emails
                                    </p>
                                    <p class="text-center">
                                    <h3 class="text-center f-3" style="color: #0dcaf0;">
                                        &#8377;<?php echo htmlspecialchars($row["plan_price"]); ?>/mo
                                    </h3>
                                    </p>
                                    <div class="text-center">
                                        <a href="Signup.php"><button class="button">Order Now</button></a>
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