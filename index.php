<?php
require('scripts/database.php');
$dbh = new DBConnection();
$dbh->getConnection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;1,500;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/style.css" />
    <title>Portfolio Home</title>
</head>
<body>
    <div id="pageWrapper" class="container-fluid">
        <!-- Background Video -->     
        <div id="background">
            <video src="imgs/video.mp4#t=10,20,5" preload="metadata" autoplay muted loop></video>
        </div>
        <!-- Tilt data is stored in the attributes of the #aboutUs div -->
        <div data-tilt data-tilt-glare data-tilt-max="10" data-tilt-max-glare="0.2" data-tilt-reverse="true" id="aboutUs" class="aboutUs container" data-tilt-scale="1.0" data-tilt>
            <header>
                <ul id="menu">
                    <li class="menuItem"><a class="navBtn" href="#">Home</a></li>
                    <li class="menuItem"><a class="navBtn" href="pages/contactForm.php">Contact</a></li>
                    <li class="menuItem"><a class="navBtn" href="pages/contact.html">Projects</a></li>
                    <li class="menuItem"><a class="navBtn" href="pages/tracker.html">Hike History</a></li>
                </ul>
            </header>
            <hr />
            <div  id="paragraph" class="container">
                <h1 id="mHeading" ><span class="largeText">Charles Robinson</span> <br /> <span id="colorText">FULL STACK</span> Web Development</h1>
                <img id="profilePic" src="imgs/myPic.jpg" alt="" height="200" width="175">
                <p>I am a full stack web developer from Birmingham, Al. I am fluent in <span class="boldUppercase">HTML</span>, <span class="boldUppercase">CSS</span>, <span class="boldUppercase">Javascript</span>, <span class="boldUppercase">PHP</span>, and always expanding. Please let me know how I can help you on my <a href="pages/aboutme.html">Contact</a> page! <br /> I enjoy traveling and hiking in my free time, i'm also into fitness and gardening. I hope to further my knowledge in web development and also expand to app dev with solidity.</p>
            </div>
            <div id="bottomSocial">
                <div class="box"><a href="http://twitter.com"><i class="animate__animated fab fa-twitter-square animate__pulse"></i></a></div>
                <div class="box"><a href="https://www.facebook.com/Austin.Robinsonn" target="_blank"><i class="animate__animated fab fa-facebook-square animate__pulse"></i></a></div>
                <div class="box"><a href="https://github.com/84bluedevil" target="_blank"><i class="fab fa-github-square animate__animated animate__pulse"></i></a></div>
            </div>
            <div class="copyright"><p class="copyright">Copyright &copy; 2021.</p></div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
    <script src="js/query.js"></script>
    <script src="js/tilt.js"></script>
    <script src="js/main.js"></script> 
</body>
</html>