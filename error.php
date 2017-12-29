<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
</head>
<body>
<aside>
    <a href="index.php#HomePage"><h1  style="margin-top: 100%">Home Page</h1></a>
    <a href="index.php#Aboutme"><h1 >About me</h1></a>
    <a href="index.php#Projects"><h1 style="margin-bottom: 100%">Projects</h1></a>
</aside>
<style>
    #Container{
        justify-content: center;
        align-content: center;


    }

    #Container *{

        width:80% ;
        margin: 0  auto 0 auto;
        padding: 20px;
        text-align: center;
    }


</style>

<div id="Container">

<div class="form">
    <h1 style="margin-top: 40%">Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];
        $_SESSION['message'] = null;
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>     
    <a href="index.php"><button class="button button-block"/>Home</button></a>
</div>
</div>
</body>
</html>
