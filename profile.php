<?php session_start();
require 'PHPincludes/db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Adam website</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">

</head>
<body>

<aside>
    <a href="index.php#HomePage"><h1   style="margin-top: 100%">Home Page</h1></a>
    <a href="index.php#Aboutme"><h1 >About me</h1></a>
    <a href="index.php#Projects"><h1  style="margin-bottom: 100%">Projects</h1></a>
        <?php

        if(isset($_SESSION['logged_in'])) {
            echo '<a href="logout.php"><h1>Logout</h1></a>';
            echo '<img src="Images/m1.png" alt="profilepicture" width="60px" height="60px">';

        }else {
            echo '<a href="LoginForum.php"><h1>Log in<br>Create Account</h1></a>';
            $_SESSION['message'] = "Error Occured ";
            header("location: error.php");
        }
        ?>
       </a>
   </div>
</aside>
<style>
    #Container{
        flex-wrap: wrap;
        justify-content: center;
        align-content: center;
        align-items: center;

    }

#Container * {
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    padding: 40px;
}

    h1{
        width: 100%;
    }

    #biotext {
        width:500px;
        overflow:hidden;
        background-color:#FFF;
        color:#222;
        font-family:Courier, monospace;
        font-weight:normal;
        font-size:24px;
        resize:none;
        line-height:40px;
        padding-left:100px;
        padding-right:100px;
        padding-top:45px;
        padding-bottom:34px;
        background-image:url(https://static.tumblr.com/maopbtg/E9Bmgtoht/lines.png), url(https://static.tumblr.com/maopbtg/nBUmgtogx/paper.png);
        background-repeat:repeat-y, repeat;
        -webkit-border-radius:12px;
        border-radius:12px;
        -webkit-box-shadow: 0px 2px 14px #000;
        box-shadow: 0px 2px 14px #000;
        border-top:1px solid #FFF;
        border-bottom:1px solid #FFF;
    }

    .button {
        border: 0;
        outline: none;
        border-radius: 0;
        padding: 15px 0;
        font-size: 2rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .1em;
        background: #1ab188;
        color: #ffffff;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
        -webkit-appearance: none;
    }
    .button:hover, .button:focus {
        background: #179b77;
    }

    .button-block {
        display: block;
        width: 100%;
    }
    </style>

<?php
//Check to see if Bio is set
    $sql = 'SELECT Bio FROM `users` WHERE email = "'.$_SESSION['email'].'";';
    $result = mysqli_query($conn,$sql);
    mysqli_fetch_assoc()


?>

    <div id="Container">


        <img src="Images/ProfilePic.png" width="120px" height="120px">




        <h1>Add a Bio about yourselve to your account</h1>
        <form action="PHPincludes/AddBio.php" method="post" autocomplete="off">
            <div class="field-wrap">
                <textarea placeholder="Enter Bio here" id="biotext" name="Bio" rows="4" style="overflow: hidden;
                 word-wrap: break-word; resize: none; height: 160px; " maxlength="255"></textarea>
            </div>
            <button class="button button-block" name="login" />Add bio</button>
        </form>

    
    </div>     
    
    </body>
        </html>