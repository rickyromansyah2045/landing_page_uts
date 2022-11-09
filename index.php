<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icon.jpg"/>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icon.jpg"/>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icon.jpg"/>

    <title>UTS Landing Page</title>
</head>

<body>
    <?php 
        include "sidebar/nav1.php";

        include "sidebar/nav2.php";
    ?>

    <section class="hero">
        <div class="intro-text">
            <h1>
                <span class="hear"> You can Hear the Jabs</span> </br>
                <span class="connecting"> Connecting </span> 
            </h1>
            <p>
                An online streaming platform for boxing matches <br />
                We also dedicate some special time to throwbacks cuz old is gold
            </p>
            <a class="btn red" href="#">Learn More</a>
            <a class="btn blue" href="login.php">Login</a>
        </div>

        <div class="i-frame">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jGyYuQf-GeE"
                title="YouTube video player" frameborder="0" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted- media; gyroscope; picture-in-picture">
            </iframe>
            <<div class="stand-1"></div>
            <div class="stand-2"></div>
        </div>
    </section>

    <!-- Web Page Script -->
    <script src="assets/js/app.js"></script>

    <!-- Ion icons CDN -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>

    <!-- Simple Lightbox -->
    <script src="assets/js/simple-lightbox.min.js"></script>
    <script>
        // Simple lightbox initializer
    </script>
</body>
</html>