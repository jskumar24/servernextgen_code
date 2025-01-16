<?php
session_start();
require 'db_connect.php';
// Dynamic variables can be defined here
$title = "Admin Panel";
$userName = "Server NextGen";
$notificationsCount = 4;
$unreadMails = 7;


// Fetch plans from the database
$sql = "SELECT * FROM tbl_dedicated_vps where plan_type = 'VPS-Windows'";
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


        <div class="container py-3 my-sm-4">
            <div class="row">
                <img src="images/windows-vps.png"></img>
                <p class="py-5">Does your current hosting provider stick you for an outside fee for every little thing
                    you add? Struggling to find a Dependable Hosting Partner who offers Add-ons more Economical than
                    anywhere else, Then you must check out ServerNexgen, which provides essential Server Add-ons such as
                    Control Panel, a Choice of Operating Systems to suit User Requirements, Additional Dedicated IPs,
                    Server Management and Monitoring, backup services, SSL Certificates, Migration Help, Storage
                    Upgrades, Fire Wall Security, and much.
                    We’re excited to offer our Indian clients a hassle-free experience with our VPS Hosting services,
                    complete with a variety of control panels like Plesk. At ServerNexgen, you’ll find a great selection
                    of VPS Server Hosting Plans, including flexible Windows VPS Hosting options that can support any
                    website or application. This allows clients from all sorts of business sectors to easily pick the
                    VPS Hosting India Plan that suits their unique needs perfectly.</p>
                <h3>Our expertise is scalable and easily upgradeable: What Sets Us Apart From Other Hosting Platforms
                </h3>
                <p class="py-2">Our Windows Cloud VPS plans are carefully designed to offer the adaptability and
                    scalability required to meet the evolving demands of your company. One of cloud computing's main
                    advantages is its flexibility, particularly in the face of unexpected spikes in demand. You can
                    easily scale your resources with our plans, guaranteeing peak performance and efficiency as your
                    needs increase.</p>
                <p class="py-2">
                    Our services provide you with the flexibility to swiftly scale your resources to match the evolving
                    IT requirements of your enterprise. Whether you need to increase or decrease disk space, CPU
                    performance, bandwidth, or RAM, our platform allows you to make these adjustments seamlessly. This
                    ensures that you can optimize your systems for peak performance, manage costs effectively, and
                    respond promptly to changing demands, all while maintaining a reliable and efficient IT
                    infrastructure.</p>
                <h3>Excellent VPS Hardware:</h3>
                <p class="py-2">For optimal results, it's essential to host your website on a platform that utilizes the
                    highest-quality hardware available. Server Nexgen employs advanced hardware components along with a
                    robust network infrastructure to provide top-tier Windows VPS servers to our clients. These servers
                    are specifically designed to efficiently handle applications of all types and sizes, including
                    virtual applications such as VMware, Hyper-V, OpenStack, Platform9, and more. Additionally, our
                    servers are equipped with Enterprise SSD drives, ensuring impressive performance that exceeds
                    expectations.</p>
                <h3>Firewall Security</h3>
                <p class="py-2">
                    Server NexGen is committed to ensuring the security of our clients' web applications. To achieve
                    this, we have installed a state-of-the-art firewall at our data center gateway to prevent cyber
                    attacks. Our advanced firewall comes with the following features.</p>
                <p class="py-2">
                    features:
                    AI-based malware protection
                    Anti-spam
                    URL and DNS Filtering
                    AV and anti-bot
                    IPS/IDS
                    SQL injection prevention</p>
                <h3>Storage and Backups:</h3>
                <p class="py-2">
                    With the world entering a more digital phase, it is safe to say that making server backups has
                    become an integral part of our lives due to the time and resources they tend to occupy. Server
                    NexGen has made it our goal to provide a comprehensive, permanent answer on how to manage backups of
                    web apps. Recognizing that our customers have different needs, we offer a full range of backups and
                    restore options such as file and folder backup or an image-based backup. We deal with your queries
                    about the backup process one at a time and ensure that there is no hassle on the part of doing it.
                    We ensure implementation of our backup solution so that automatic, periodic backups are made to
                    private cloud storage. This means a backup schedule could be set up according to your operational
                    needs without having to repeat the process every time manually. We also, most importantly, care for
                    the security of your data. Backup data that is created from our solution can only be read as it has
                    been stored in an encrypted manner to protect your information from being accessed and misused by
                    unauthorized people. Server NexGen ensures that your data is not only regularly backed up but also
                    secured with the highest possible standards.</p>
                <h3>99.995 % Uptime:</h3>
                <p class="py-2">

                    Every Windows Server Hosting plan offered by Server NexGen in India guarantees an uptime of 99.995%.
                    We are committed to delivering exceptional operational reliability without any risk of service
                    interruptions. This commitment is supported by Server NexGen’s advanced infrastructure, which is
                    strategically located across various regions of India. Our facility includes an exclusive data
                    center. In the event that a server encounters any difficulties, we promptly transfer your data to an
                    alternative standby server, thereby ensuring uninterrupted service. Our dedicated reliance on
                    high-performance bandwidth is essential, as bandwidth significantly contributes to maintaining
                    continuous service and ensuring dependable IP connectivity.</p>

                <h3>VPS Server Migration:</h3>
                <p class="py-2">

                    Our VPS hosting services come with a comprehensive and complimentary migration process specifically
                    designed to make your transition as smooth as possible. We understand that moving your entire online
                    presence can be a daunting task, so we’re here to simplify it for you. You can effortlessly transfer
                    your databases, files, and email accounts from your previous hosting provider to our advanced
                    platform without any interruptions or complications. Our dedicated team of migration specialists
                    will take charge of every aspect of the website migration process. From initial planning to final
                    execution, we ensure that your transition is executed flawlessly, allowing your services to remain
                    uninterrupted. In addition, our free website migration services come with personalized support
                    tailored to your needs. We use industry best practices to move your website efficiently,
                    guaranteeing that all components work seamlessly post-migration. This way, you can focus on your
                    business without worrying about potential downtime or data loss. Leave the intricate details of the
                    migration process to our experienced team, and experience a hassle-free transfer to our reliable
                    hosting platform that prioritizes your success and satisfaction. With us, you can rest assured that
                    your website is in capable hands and that your services will continue with minimal disruption.</p>
            </div>
        </div>
        <div class="container py-5">
            <h3 class="text-center py-3">VPS Windows Plans</h3>
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
                                <a href="checkout.php"><button class="button-div px-0">Order Now</button></a>
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