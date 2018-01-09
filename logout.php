<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="CSS/LoginCSS.css">
</head>

<style>
    #Container *{
        width: 100%;
        text-align: center;
        padding-top: 30px;

    }

    #Container button{
        margin: auto;
        width: 80%;
    }
</style>

<body>
<aside>
    <a href="index.php#HomePage"><h1  style="margin-top: 100%">Home Page</h1></a>
    <a href="index.php#Aboutme"><h1 >About me</h1></a>
    <a href="index.php#Projects"><h1 style="margin-bottom: 100%">Projects</h1></a>

</aside>

    <div id="Container" style="flex-wrap: wrap;" >
        <h1>Thanks for stopping by</h1>
               <h1>You have been Logged out</h1>

          <a href="index.php"><button class="button button-block"/>Home</button></a>

    </div>
</body>
</html>
