<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn More About Red Hat Enterprise Linux (RHEL)</title>
    <link id="themeStylesheet" rel="stylesheet" href="styles.css">
    <script src="themeChanger.js"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="rhel-overview.php">RHEL Overview</a>
            <a href="rhel-history.php">RHEL History</a>
            <a href="rhel-features.php">Web Apps & RHEL</a>
            <a href="rhel-Benefits.php">RHEL Benefits</a>
            <a href="learn-More.php">Learn More</a>
        </nav>
        <p class="pod-name">
            <?php
                $pod_name = getenv('POD_NAME');
                echo "Served by pod: $pod_name";
            ?>
        </p>
        <h1>Learn More About Red Hat Enterprise Linux (RHEL)</h1>

        <section>
            <h2>Books</h2>
            <ul>
                <li><strong>"Red Hat Enterprise Linux Essentials"</strong> by Neil Smyth</li>
                <li><strong>"RHEL 8 Administration"</strong> by Sander van Vugt</li>
            </ul>
        </section>

        <section>
            <h2>Online Courses</h2>
            <ul>
                <li><strong>Red Hat Training:</strong> Various RHEL courses and certifications</li>
                <li><strong>Coursera:</strong> "RHEL Fundamentals"</li>
            </ul>
        </section>

        <section>
            <h2>Websites and Blogs</h2>
            <ul>
                <li><strong>Red Hat Official Documentation</strong></li>
                <li><strong>Red Hat Blog:</strong> Articles and updates on RHEL</li>
            </ul>
        </section>
        
        <section class="cta-section">
            <h2>Ready to Dive Deeper into RHEL?</h2>
            <p>If you're eager to expand your knowledge of Red Hat Enterprise Linux, explore these resources as a solid starting point. Happy learning!</p>
        </section>
    </div>
</body>
</html>