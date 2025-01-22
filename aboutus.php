<?php
// Dynamic server-side content setup if needed
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

        <div class="container my-sm-4">
            <div class="row">
                <!-- <div class="table-column"> -->
                <p class="text-left f-4">About</p>
                <h4 class="py-3">Hosted in a top-tier Indian data center:</h4>
                <p class="py-1 text-justify ">
                    Our services are hosted in a Tier 4 data center in India, which ensures an impressive 99.995%
                    uptime. We are committed to providing world-class services at a competitive price. To minimize
                    the risk of service outages, we implement a redundant infrastructure and adhere to the highest
                    global security standards to prevent potential outages. In addition, our comprehensive backup
                    solutions significantly reduce the possibility of downtime and increase the reliability of our
                    services.</p>
                <p class="py-1 text-justify ">
                    Servernexgen is a full-service hosting company with a focus on the more contemporary aspects of
                    the hosting industry. Because of Servernexgen’s no-nonsense philosophy, many customers are quite
                    happy with the services and decide to work with them on a long-term basis.
                </p> 
            </div>
        </div>

        <div class="container py-3 my-sm-4" style="background:#f8f9fa">
            <div class="row row-cols-xl-1">
                <h4 class="text-center px-5 f-3">Our Features</h4> 
                <div class="collapsible-plus">We Offer Robust & Safe Features</div>
                <div class="content1">
                    <p class="py-1 text-justify">
                       At Server NexGen, we offer robust and secure hosting solutions designed to improve your organization's performance, protect data and increase uptime. The following versions can be supported by our servers: Windows Server Standard Editions and Windows Server Data Center Editions. Proxmox,Virtualizor, KVM ,VMware ESXi,, SolusVM, RHEL, CentOS , Ubuntu, Debian, Kali Linux,Rocky Linux, Alma Linux and so on.
                    </p>
                </div>
                <div class="collapsible-plus">Personalized Solution Design in Response to Requirements</div>
                <div class="content1">
                    <p class="py-1 text-justify">
                        We deliver a broad range of both fixed and customized configurations to accommodate various business needs and preferences. Our highly skilled infrastructure team specializes in developing bespoke solutions that align perfectly with the specific requirements of each project or customer. We pride ourselves on offering scalable configurations that cater to different performance levels, from budget-friendly low-end options to advanced high-end solutions. Once we design these tailored solutions, we deploy them within our state-of-the-art data center facilities. This strategic deployment not only optimizes performance but also ensures ongoing reliability and smooth business operations. Our commitment is to provide effective infrastructure that enables our clients to achieve their operational goals efficiently and effectively.
                    </p>
                </div>
                <div class="collapsible-plus">Cost - Effective Solutions</div>
                <div class="content1">
                    <p class="py-1 text-justify">
                        Cost-effective hosting options are essential for companies trying to improve their internet visibility while minimizing expenses. These choices come in different speed and scalability levels and include dedicated hosting, virtual private servers (VPS), and shared hosting. For small websites, shared hosting is affordable and effective; but, for expanding organizations, VPS provides more resources and management. Dedicated hosting is more cost-effective and offers users the high performance that makes it appropriate for changing needs. By selecting the appropriate hosting solution, companies can maintain control over their running expenses and stay within their budget while guaranteeing dependable uptime, quick loading times, and sufficient security.
                    </p>
                </div>
                <div class="collapsible-plus">24 X 7 Sales & Support</div>
                <div class="content1">
                    <p class="py-1 text-justify">
                        People demand the increased level of product quality in the society characterized by technological advancement and global competition. Whether it is morning, afternoon, evening or night, the consumer demands immediate availability of a host of products and services. It is clear that to answer this constantly evolving situation we have consciously structured a sales and support system that operates twenty-four hours a day, seven days a week. These are always online to ensure that the customer gets the platform, and assistance they need to get in touch with the sales and customer service team at the most appropriate time they feel is appropriate of use to them in meeting their business objectives.
                    </p>
                </div>
                <div class="collapsible-plus">Server Support</div>
                <div class="content1">
                    <p class="py-1 text-justify">
                        Our dedicated support team acts as an extension of your staff, offering comprehensive installation services tailored to meet your specific business needs. The experienced Server Nexgen team also manages your web applications, databases, and web security, ensuring they operate efficiently and securely. We proudly provide one-time server deployment and server migration services at no additional cost, showcasing our commitment to delivering value to our clients. Additionally, our enterprise support team is always available to provide top-notch, premium support, ensuring your operations run smoothly and efficiently.
                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php include "footer.php"; ?>
    <script>
        // JavaScript for toggle functionality
        var coll = document.getElementsByClassName("collapsible-plus");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active-plus"); // Toggle the 'active' class
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null; // Collapse content
                } else {
                    content.style.maxHeight = content.scrollHeight + "px"; // Expand content
                }
            });
        }
    </script>
</body>

</html>