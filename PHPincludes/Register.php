<?php
/**
 * Created by PhpStorm.
 * User: avaca
 * Date: 12/28/2017
 * Time: 2:40 AM
 */
/* Registration process, inserts user info into the database
   and sends account confirmation email message
 */
if(!isset($_SESSION)){
session_start();

}
include 'db.php';
// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];

// Escape all $_POST variables to protect against SQL injections
$first_name = mysqli_real_escape_string($conn,$_POST['firstname']);
$last_name = mysqli_real_escape_string($conn,$_POST['lastname']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = mysqli_real_escape_string($conn,md5( rand(0,1000)));

// Check if user with that email already exists
$result = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'") or die($conn->error());

// We know user email exists if the rows returned are more than 0
if ( mysqli_num_rows($result) > 0 ) {

    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");

}
else { // Email doesn't already exist in a database, proceed...
    $Bio = '""';
    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (first_name, last_name, email, password, hash,Bio) "
        . "VALUES ('$first_name','$last_name','$email','$password','$hash','$Bio');";
    // Add user to the database
    if ( mysqli_query($conn,$sql)){
        //WIL UPDATE!!
        $_SESSION['active'] = 1; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['Bio'] = "";
        $_SESSION['message'] =

            "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification ( clevertechie.com )';
        $message_body = '
        Hello '.$first_name.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://localhost/login-system/verify.php?email='.$email.'&hash='.$hash;

        mail( $to, $subject, $message_body );

        header("location: profile.php");

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }

}