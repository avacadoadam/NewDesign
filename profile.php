<?php session_start();
if(isset($_SESSION['Bio'])){
    $Bio = $_SESSION['Bio'];
}else{
    $Bio = "";
}
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
        background-color:#000000;
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
    #Bio{
        height: auto;
        width: 100%;
        border: 1px solid white;

    }

    .EditButtons{
      width: 50%;margin: 0px;display: inline-block;height: 100px;padding: 0px;
    }

    </style>


    <div id="Container">
        <img src="Images/ProfilePic.png" width="120px" height="120px">
        <form action="PHPincludes/AddBio.php" method="post" autocomplete="off">
        <?php
        //Test to see if Bio is null ("") if so will display Edit Bio forum that is wrapped by one if not will display
        //Bio with edit option that will call Addbio With the Bio they typed
        //I achieved this by concating a style attribute to elements that i want to show
        //or hide and creating a script to display element based on
        if($Bio == ""){
            echo '<div id="EditBio"><h1>Add a Bio about yourselve to your account</h1>';
            echo ' <div class="field-wrap">
                <textarea placeholder="Enter Bio here" id="biotext" name="Bio" rows="4" style="overflow: hidden;
                 word-wrap: break-word; resize: none; height: 160px; " maxlength="255"></textarea> </div>
            <button class="button button-block" name="login" />Add bio</button></div>';
//God
            echo '<div id="DisplayBio" style="display:none;"><div id="Bio"><h3 id="BioBox">'.$Bio.'</h3></div>';
            echo '  <div id="Edit_Buttons"  class="button button-block" onclick="ChangeToEdit()" />Edit Bio</div>
                     <div  id="Edit_Buttons" class="button button-block"  />Edit Profile Picture</div>';

        }else{
            echo '<div id="EditBio" style="display:none;"><h1>Add a Bio about yourselve to your account</h1>';
            echo ' <div class="field-wrap">
                <textarea  placeholder="Enter Bio here" id="biotext" name="Bio" rows="4" style="overflow: hidden;
                 word-wrap: break-word; resize: none; height: 160px; " maxlength="255"></textarea> </div>
            <button  class="button button-block" name="login" />Add bio</button></div>';



            echo ' <div id="DisplayBio"><div id="Bio"><h3 id="BioBox">'.$Bio.'</h3></div>';
            echo '  <div id="Edit_Buttons"  class="button button-block" onclick="ChangeToEdit()" />Edit Bio</div>
                     <div id="Edit_Buttons" class="button button-block"  />Edit Profile Picture</div></div>';
        }
        ?>
        </form>





<script>

             var DisplayBio = document.getElementById("DisplayBio");
             var EditBio = document.getElementById("EditBio");
             var BioBox = document.getElementById("BioBox");
             var bioText = document.getElementById("biotext");
             //When change to edit mode Text from bio conatiner is pulled
             //palced in variable and place in the text box then added.
             function ChangeToEdit() {
                 DisplayBio.style.display = "none";
                 var Bio = BioBox.innerText;
                 bioText.innerText = Bio;
                 EditBio.style.display = "block";
            }

             function ChangeToDisplay() {
                 DisplayBio.style.display = "block;"
                 EditBio.style.display = "none";
             }


        </script>

    
    </div>     
    
    </body>
        </html>