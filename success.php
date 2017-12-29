<?php
/* Displays all successful messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="CSS/LoginCSS.css">
</head>
<body>
<aside>
    <a href="index.php#HomePage"><h1  style="margin-top: 100%">Home Page</h1></a>
    <a href="index.php#Aboutme"><h1 >About me</h1></a>
    <a href="index.php#Projects"><h1 style="margin-bottom: 100%">Projects</h1></a>

</aside>
<div class="form">
    <h1><?= 'Success'; ?></h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];    
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>
    <a href="index.php"><button class="button button-block"/>Home</button></a>
</div>
</body>
</html>
