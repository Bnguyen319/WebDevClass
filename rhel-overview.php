<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHEL OS Overview</title>
    <link id="themeStylesheet" rel="stylesheet" href="styles.css">
    <script src="themeChanger.js"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="rhel-overview.php">RHEL Overview</a>
            <a href="rhel-history.php">RHEL history</a>
            <a href="rhel-features.php">RHEL Features</a>
            <a href="rhel-benefits.php">RHEL Benefits</a>
            <a href="learn-more.php">Learn More</a>
            <a href="color-changer.php">Color Changer</a>
        </nav>
        <p class="pod-name">
            <?php
                $pod_name = getenv('POD_NAME');
                echo "Served by pod: $pod_name";
            ?>
        </p>
        <h1>Welcome to Red Hat Enterprise Linux (RHEL)</h1>
        <img src="https://developers.redhat.com/sites/default/files/styles/article_feature/public/2021_RHEL_9_Featured_Article_image_A.webp?itok=N07doe4e" alt="RHEL Logo" style="width: 200px; height: 150px;" class="rhel-logo">
        <h2>What is RHEL?</h2>
        <p>Red Hat Enterprise Linux, often referred to as RHEL, is an enterprise-grade open-source operating system designed to provide a reliable and secure platform for businesses and organizations. It offers a robust foundation for a wide range of applications and services.</p>
        <h2>History</h2>
        <p>Introduced by Red Hat Inc., RHEL made its debut in the year 2000. Over the years, it has evolved into a trusted and industry-standard choice for enterprises, offering long-term support, updates, and a broad ecosystem of software solutions.</p>
        <img src="https://access.redhat.com/webassets/avalon/d/Red_Hat_OpenStack_Platform-11-Architecture_Guide-en-US/images/fce6394275bd3444892c5d3a91ccf17c/RHEL_OSP_arch_347192_1015_JCS_01_Interface-Overview.png" alt="RHEL Architecture Diagram" style="width: 200px; height: 150px;" class="rhel-diagram">
        <h2>How Does it Work?</h2>
        <p>RHEL operates on various hardware platforms and cloud environments, providing a stable and secure environment for applications and data. It employs a subscription-based model that offers extensive support, security updates, and access to Red Hat's vast repository of software packages.</p>
        <p>Red Hat provides tools, resources, and services to help businesses manage, deploy, and scale their RHEL installations efficiently, ensuring high availability and security.</p>
    </div>
</body>
</html>
