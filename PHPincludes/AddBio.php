<?php
/**
 * Created by PhpStorm.
 * User: avaca
 * Date: 12/28/2017
 * Time: 11:06 PM
 */
require 'db.php';
session_start();
    if(isset($_POST['Bio']) ){

            if ($_SESSION['logged_in'] == true or die()) {
                $BioExccasped = mysqli_escape_string($conn, $_POST['Bio']);
                $SQL = 'UPDATE `users` SET Bio =  "' . $BioExccasped . '" WHERE email = "' . $_SESSION['email'] . '";';
                mysqli_query($conn, $SQL);
                $_SESSION['message'] = "Successfuly Created Bio";
                $_SESSION['Bio'] = $_POST['Bio'];
                header("location: ../profile.php");
            }

    }
