<?php
/**
 * Created by PhpStorm.
 * User: avaca
 * Date: 11/28/2017
 * Time: 2:06 AM
 */

session_start();
$NavBarMessage = "error";
function CheckLogin(){
    if(isset($_SESSION['LogID'])){
        return true;
    }else{
        return false;
    }
}
function NavbarBuild(){
    if(CheckLogin()){
        return "<a href=\"Logout.php\" id=\"LogOut\">Log out</a>";
    }else{
        return "<ul><li><a href=\"login.html\" id=\"Login\">Login</a></li><li><a href=\"CreateAccount.html\" id=\"Create\">Create Account</a></li> </ul>";
    }
}
function LogOutOfSession(){
    session_unset();
    session_destroy();
    session_destroy();
}
function CreateSession($conn,$name){
    setcookie("LoginInCookie",$name,time() + 86400);
    $_SESSION['LogID'] = GetId($conn,$name);
}






?>