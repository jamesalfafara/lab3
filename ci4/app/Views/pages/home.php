<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
</head>


<?php
$css = file_get_contents('css/style-main.css');
echo $css;
?>

<nav>
    <ul>
       <li><a href="./index.html">About</a></li>
       <li><a href="./portfolio.html">Portfolio</a></li>
       <li><a href="./JavaScript Testing/javascript_test.html">JavaScript Testing</a></li>
       <li><a href="./PHP/index.php">Forms</a></li>
       <li><a href="./Guests/guests.php">Guests</a></li>
    </ul>
 </nav>
 
 <a href=""></a>

<div class="header">
    <h2 class="title">Welcome Viewer</h2>
</div>

<body>
    <section>
        <img src="img/1 copy.png" class="first-pic" width="40%" height="40%">
        <div class="description">
            <h1 class = "about-me-title">About Me _______________________</h1>
            <p class = "about-me-desc">MY NAME IS JAMES ALFAFARA</p>
            <p class="about-me-desc">I AM CURRENT STUDENT IN ASIA PACIFIC COLLEGE STUDYING COMPUTER SCIENCE SPECIALIZING IN SOFTWARE AND SYSTEMS.</p>
            <p class="about-me-desc">THOUGH MY COURSE IS NOT ACTUALLY MY PASSION, BUT RATHER SOMETHING I'D WANT TO LEARN FOR THE REASON OF CURIOSITY.</p>
            <p class="about-me-desc">IM ACTUALLY AN ARTIST, MAINLY IN PERFORMING SUCH AS DANCING AND SINGING. I ALSO ILLUSTRATE AND DO GRAPHIC DESIGN. ATTEMPTED FASHION DESIGN AND MUSIC PRODUCING AS WELL. I ALSO DO MODELING AND STYLING.</p>
        </div>
    </section>

    <section class="portfolio">
        <div>
            <a class="portfolio-button" href="./portfolio/portfolio.html">P O R T F O L I O</a>
        </div>
        <img src="img/2.png" class="second-pic" width="40%" height="40%">
    </section>
    <h1 class="my-socials">My Socials</h1>
    <section class="contact">
        <div class="socials">
            <a href= "https://www.facebook.com"><img class="facebook" src="socials-03.png" alt="facebook" width="10%" height="10%"></a>
            <a href= "https://www.instagram.com"><img class="insta" src="socials-04.png" alt="instagram" width="10%" height="10%"></a>
            <a href= "https://www.youtube.com/channel/UCNRwm40wTlg3t9aiihOejJA"><img class="youtube" src="socials-05.png" alt="youtube" width="10%" height="10%"></a>
        </div>
    </section>
</body>

</html>