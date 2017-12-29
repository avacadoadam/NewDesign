<?php
/* User login process, checks if user exists and password is correct */
include 'db.php';
if(!isset($_SESSION)){
    session_start();

}
// Escape email to protect against SQL injections
$email = mysqli_real_escape_string($conn,$_POST['email']);
$result = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

if ( mysqli_num_rows($result) == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
} else { // User exists
    $user = mysqli_fetch_assoc($result);

   if ( password_verify($_POST['password'], $user['password']) ) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];

        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
        $_SESSION['message'] = "You have Logged in enjoy";
        header("location: profile.php");
    } else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}


