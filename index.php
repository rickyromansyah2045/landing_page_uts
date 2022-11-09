<!DOCTYPE html>
<html lang="en">

    <?php 
        include "header/header.php";
    ?>

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

   <?php 
        include "footer/footer.php"
   ?>
</body>
</html>