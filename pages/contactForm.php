<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;1,500;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Contact Me</title>
</head>
<body>
    <div id="pageWrapper">
        <div id="background">
            <video id='backgroundVideo' src="../imgs/video.mp4#t=10,20,5" preload="metadata" autoplay muted loop></video>
        </div>
        <div data-tilt data-tilt-reverse="true" data-tilt-glare data-tilt-max-glare="0.2" data-tilt-scale="1.1" id="aboutUs" class="aboutUs" data-tilt>
            <header>
                <ul id="menu">
                    <li class="menuItem"><a class="navBtn" href="../index.php">Home</a></li>
                    <li class="menuItem"><a class="navBtn" href="#">Contact</a></li>
                    <li class="menuItem"><a class="navBtn" href="../pages/contact.html">Projects</a></li>
                    <li class="menuItem"><a class="navBtn" href="../pages/tracker.html">Hike Tracker!</a></li>
                </ul>
            </header>
            <div id="paragraph" class="columnCenter">
                <h1 id="mHeading2" class="centeredText">Contact Me!</h1>
                <form method="POST" action="../scripts/create.php" >
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address <i id="emailError" class="fas fa-exclamation hide error"></i></label>
                        <input type="email" name="email" class="form-control formLength emailInput" id="exampleFormControlInput1" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Let me know what I can do for you! <i id="messageError" class="fas fa-exclamation hide error"></i></label>
                        <textarea type="text" name="message" class="form-control formLength messageInput" id="exampleFormControlTextarea1" rows="3" placeholder="Please use at least 25 characters..." required></textarea>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button id="msgBtn" class="btn btn-primary" type="submit">Send Me A Message!</button>
                        <button id="audioBtn" class="btn btn-primary" type="button">Be Happy!</button>
                    </div>
                </form>
                <audio id="audioOne" src="../audio/behappy.mp3"></audio>
            </div>
            <div id="bottomSocial">
                <div class="box"><a href="#"><i class="icon animate__animated fab fa-twitter-square animate__pulse"></i></a></div>
                <div class="box"><a href="https://www.facebook.com/Austin.Robinsonn" target="_blank"><i class="icon animate__animated fab fa-facebook-square animate__pulse"></i></a></div>
                <div class="box"><a href="https://github.com/84bluedevil" target="_blank"><i class="icon far fa-envelope animate__animated animate__pulse"></i></a></div>
            </div>
        </div>
    </div>
    <script src="../js/query.js"></script>
    <script src="../js/tilt.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>