<?php
//Cookie
$_COOKIE;

//IF time is set to negative cookie will be destoyed on next update
function SetCookie($CookieName,$CookieValue,$Time){
    setcookie($CookieName,$CookieValue,$Time);
}
//Set Session
function Set_Session($Session_Name,$Session_Value){
    $_SESSION[$Session_Name] = $Session_Value;
}

/**
 * Created by PhpStorm.
 * User: avaca
 * Date: 11/24/2017
 * Time: 1:45 AM
 */