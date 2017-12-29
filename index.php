<?php
require 'PHPincludes/db.php';
session_start();


?>
<!DOCTYPE html>
<html>
<head>
    <title>Adam website</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="CSS/Projectstyle.css" type="text/css">
    <link rel="stylesheet" href="CSS/HomepageStyle.css" type="text/css">

    <script src="jquery-3.2.1.min.js" type="application/javascript"></script>
</head>
<body>


<aside>
    <h1 name="HomePage" class="NavBar_Home" style="margin-top: 100%">Home Page</h1>
    <h1 name="Aboutme" class="NavBar_AboutMe" >About me</h1>
    <h1 name="Projects" class="NavBar_Projects"  style="margin-bottom: 100%">Projects</h1>
    <?php
    if(isset($_SESSION['logged_in'])) {

            echo '<a href="logout.php"><h1>Logout</h1></a>';
            echo '<img src="Images/m1.png" alt="profilepicture" width="60px" height="60px">';
    }else {
            echo '<a href="LoginForum.php"><h1>Log in<br>Create Account</h1></a>';

    }
    ?>

   </div>
</aside>
<div id="Container">
    <div class="Homepage">
    <div class="Text_Wrap" id="Introduction">

        <p><span id="CurlyBrackets">{ </span>Hey <span id="Color_HightLight_lightRed">Welcome</span> to my Site I am a ispiring <span id="Light_blue_highlight">Software Developer</span> I mainly code in <span id="Color_HightLight_lightRed">Java</span> but have started learning <span id="Color_HightLight_lightRed">C</span> to not only further
            my <span id="HightLight_LightGreen">knowledge</span> of <span id="Color_HightLight_lightRed">Java</span> as it was build on <span id="Color_HightLight_lightRed">C</span> but also get a better insight of the computer <span id="HightLight_LightGreen">inner</span> works.<span id="CurlyBrackets"> }</span></p>
    </div>

    <div class="Text_Wrap" id="Project">
        <p> <span id="Comment">/**<br>
            *PS you dont like the theme Its only on the front Page<br>
            */<br></span>
            <span id="CurlyBrackets">{ </span>If you are here to view my <span id="Light_blue_highlight">Portifilo</span> click on the link <a href="/Html%20PHP/index.php">here</a> to veiw my existing <span id="Color_HightLight_lightRed">Projects</span> and <span id="HightLight_LightGreen">source</span> code.<span id="CurlyBrackets"> }</span></p>

    </div >

    <div class="Text_Wrap" id="AboutMeparagraph">
        <p><span id="CurlyBrackets">{ </span>If you want to know more <a href="#">About me</a> click here <span id="CurlyBrackets"> }</span></p>
    </div >
    </div>
    <!--//End of homepage-->
    <div class="Aboutme"style="display: none;justify-content: space-around;flex-wrap: wrap;align-items: center;align-content: space-around;width: 100%;height: 100%">
        <p style="width: 100%;text-align: center;font-size: 30px">I think my greatest strength is finding a passion in all areas of my life</p>
        <a href=""><img src="Images/linkedin.png" alt=""></a>
        <a href="#"><img src="Images/if_github_291716.png" alt=""></a>
        <a href="#"><img src="Images/gmail.png" alt=""></a>
        <a href="#"><img src="Images/youtube.png" alt=""></a>
    </div>
    <!--&#45;&#45;END of the about me page-->
    <div class="Projects" style="display: none">
        <div class="ProjectItemConatiner" id="JavaProject">
            <img src="Images/Java-1-Introduction.png" alt="java" class="java_image_slider">
            <div class="Overlay" id="JavaOverlay">
                <div class="Overlaytext">First Computer lauguage and my favorite Java programming is fast but still powerful
                    <br>Click For a few of my projects
                </div>
            </div>
            </div>

        <div class="ProjectItemConatiner" id="PythonProject">
            <img src="Images/python-logo-master.png" alt="java" class="java_image_slider">
            <div class="Overlay" id="PythonOverlay">
                <div class="Overlaytext">Introduced to python I was fully conviced it would make the list i feel focusing on
                    <br>a single lauaguage is best however the ease of programming with python is simply addivtive.
                </div>
            </div>
        </div>
        <div class="ProjectItemConatiner" id="NetworkingProject">
            <a href=""> <img src="Images/c1f25b_dc12f28906d143fa94689cc1afad9387_mv2.jpg" alt="networking
" class="java_image_slider">
            <div class="Overlay" id="NetowrkingOverlay">
                <div class="Overlaytext">Cisco Networking has open my eyes i think its nessacary for IT to understand
                    <br> networking as upluging your computer from the worlds millions of networks renders it useless in my eyes
                </div>
            </div>
            </a>
        </div>



    </div>
</div>


<script src="JavascriptPageChange.js" type="application/javascript"> </script>
</body>


</html>