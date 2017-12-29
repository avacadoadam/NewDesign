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
</head>

<body>
<aside>
    <a href="index.php#HomePage"><h1  style="margin-top: 100%">Home Page</h1></a>
    <a href="index.php#Aboutme"><h1 >About me</h1></a>
    <a href="index.php#Projects"><h1 style="margin-bottom: 100%">Projects</h1></a>

</aside>

    <div id="Container" style="flex-wrap: nowrap" >
          <h1>Thanks for stopping by</h1><br>
              
          <p><?php echo '<h1>You have been logged out!</h1>'; ?></p>
          
          <a href="index.php"><button class="button button-block"/>Home</button></a>

    </div>
</body>
</html>
