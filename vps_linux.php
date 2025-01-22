<?php
session_start();
require 'db_connect.php';
// Dynamic variables can be defined here
$title = "Admin Panel";
$userName = "Server NextGen";
$notificationsCount = 4;
$unreadMails = 7;


// Fetch plans from the database
$sql = "SELECT * FROM tbl_dedicated_vps where plan_type = 'VPS-Linux'";
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
                <div class="table-column"><img src="images/linux-vps.gif" width="30%"></img></div>
                <p class="py-5 text-justify">Are you tired of your current hosting provider charging you excessive fees for even the smallest additions? If so, it is time to partner with a hosting service that truly prioritizes your needs and offers exceptional value. At ServerNexgen, we pride ourselves on being a dependable hosting partner that provides a comprehensive suite of cost-effective add-ons. Our extensive range of essential server add-ons includes powerful control panels, a diverse selection of operating systems tailored to your specific requirements, and the option for additional dedicated IP addresses. We also offer robust server management and monitoring services that guarantee your server operates at peak performance. Our reliable backup services safeguard your critical data, while our SSL certificates enhance the security of your online transactions. Additionally, our expert migration assistance ensures a smooth transition to our services, with no disruption to your operations. You can also benefit from flexible storage upgrades and solid firewall security to protect your assets from potential threats. We are excited to bring our superior VPS hosting services to Indian clients, providing a seamless and efficient experience. Our VPS packages include a variety of user-friendly control panels, such as Plesk, to help you manage your hosting environment effortlessly. With an impressive selection of VPS hosting plans, including flexible Linux VPS options, we cater to the needs of any website or application. This enables clients across all business sectors to confidently select the VPS hosting plan that aligns perfectly with their unique operational requirements, empowering them to achieve optimal performance and reliability. Choose ServerNexgen and experience the difference in quality and service that will elevate your online presence.</p>
                <h3>Virtual Server Migration
                </h3>
                <p class="py-2 text-justify">Our Virtual Private Server (VPS) hosting services include a thorough and complimentary migration process, specifically designed to facilitate a seamless transition for our clients. We recognize that the relocation of an entire online presence may be a challenging endeavor, and we are committed to simplifying this experience. Our clients can transfer databases, files, and email accounts from their previous hosting providers to our advanced platform with ease, ensuring that the process occurs without interruptions or complications. A dedicated team of migration specialists will manage every aspect of the website migration, guiding clients from the initial planning stage to final execution. This approach ensures that the transition occurs flawlessly while maintaining uninterrupted services. Furthermore, our complimentary website migration services include personalized support tailored to the unique needs of each client. We adhere to industry best practices to ensure the efficient movement of websites, thereby guaranteeing that all components function seamlessly following migration. This allows our clients to concentrate on their business activities without the concern of potential downtime or data loss. Clients are encouraged to entrust the complexities of the migration process to our experienced team, ensuring a smooth transition to our reliable hosting platform that prioritizes their success and satisfaction. With our services, clients can be assured that their websites are in capable hands, and that their services will continue with minimal disruption.</p>
                <h3>Easy to Scale and Upgrade</h3>
                <p class="py-2 text-justify">
                    Each of our Linux Cloud VPS plans is meticulously crafted to offer a high level of flexibility, allowing businesses to seamlessly adapt to their changing requirements. This adaptability is a fundamental advantage of cloud computing, especially when faced with sudden and unpredictable spikes in demand, which can occur due to various factors such as market trends, seasonal fluctuations, or promotional events. With our comprehensive services, you are empowered to swiftly scale your resources—whether increasing or decreasing disk space, CPU performance, bandwidth allocation, or RAM capacity. This scalability ensures that your IT infrastructure can precisely align with the unique needs of your organization at any given time. Consequently, businesses can maintain optimal performance and cost efficiency, ensuring that they are well-prepared to meet operational challenges as they arise.</p>
                <h3>Excellent VPS Hardware:</h3>
                <p class="py-2 text-justify">For optimal results, it's essential to host your website on a platform that utilizes the
                    highest-quality hardware available. Server Nexgen employs advanced hardware components along with a
                    robust network infrastructure to provide top-tier Windows VPS servers to our clients. These servers
                    are specifically designed to efficiently handle applications of all types and sizes, including
                    virtual applications such as VMware, Hyper-V, OpenStack, Platform9, and more. Additionally, our
                    servers are equipped with Enterprise SSD drives, ensuring impressive performance that exceeds
                    expectations.</p>
        
                    <h3>Firewall Security</h3>
                <p class="py-2 text-justify">
                    Server NexGen is committed to empowering the security of our clients' web applications. With a state-of-the-art firewall installed at our data center gateway, we are proactive in preventing cyber attacks. Our advanced firewall is equipped with exceptional features that exemplify our dedication to safeguarding your digital assets.</p>
                <p class="py-2 text-justify">
                    features:
                    AI-based malware protection
                    Anti-spam
                    URL and DNS Filtering
                    AV and anti-bot
                    IPS/IDS
                    SQL injection prevention</p>
                <h3>Storage and Backups:</h3>
                <p class="py-2 text-justify">
                    As the world continues to embrace digital advancements, making server backups has become an essential part of managing data due to the time and resources involved. At Server NexGen, our mission is to provide a comprehensive, permanent solution for managing backups of web applications. We understand that our customers have diverse needs, which is why we offer a full range of backup and restore options, including file and folder backups as well as image-based backups. We address your queries about the backup process individually, ensuring a hassle-free experience. Our backup solution includes the implementation of automatic, periodic backups to private cloud storage. This means you can establish a backup schedule tailored to your operational requirements without having to manually repeat the process each time. Most importantly, we prioritize the security of your data. Backup data generated by our solution is stored in an encrypted format, ensuring that it can only be read by authorized users. Server NexGen is committed to not only regularly backing up your data, but also safeguarding it to the highest possible standards.</p>
                <h3>99.995 % Uptime:</h3>
                <p class="py-2 text-justify">Every Linux Server Hosting plan from Server NexGen in India guarantees an impressive uptime of 99.995%. We are fully committed to delivering unparalleled operational reliability, ensuring that service interruptions are a thing of the past. Our state-of-the-art infrastructure is strategically positioned across multiple regions in India, featuring a dedicated data center that enhances our capabilities. Should any server face challenges, we immediately transfer your data to a standby server, ensuring that your service remains seamless and uninterrupted. Our dedication to high-performance bandwidth is essential, as it is a key factor in maintaining continuous service and providing reliable IP connectivity.</p>
            </div>
        </div>
        <div class="container py-5">
            <h3 class="text-center py-3">VPS Linux Plans</h3>
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