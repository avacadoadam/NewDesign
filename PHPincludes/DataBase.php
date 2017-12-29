<?php

    $dbServerName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "testdatabase";

    $conn = mysqli_connect($dbServerName,$dbUsername,$dbPassword,$dbName);
    //Test
//Will return true if username is not present
function SearchForUsername($conn,$username_string){
    $sql_Search_for_Username = "SELECT * FROM usernames WHERE Username='$username_string'";
    $result = mysqli_query($conn,$sql_Search_for_Username);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0 ){
        return true;
    }else{
        return false;
    }
}

function GetId($conn,$username_string){
    $SQL_ID_Statement = "SELECT * FROM usernames WHERE Username='$username_string'";
    $result = mysqli_query($conn,$SQL_ID_Statement);
    $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row['ID'];
        } else {
            return 0;
        }
}
function AddAccount($conn,$Uname,$Psw){
    $sql_Login = 'INSERT INTO usernames(Username,Password) VALUES("' . $Uname . '","' . $Psw . '");';
    mysqli_query($conn, $sql_Login) or die("Error");
}
function CheckPassword($conn,$Psw,$ID){
    $SQL_STATEMENT = "SELECT * FROM usernames WHERE ID = ".$ID." AND Password = \"".$Psw."\"";
    $result = mysqli_query($conn,$SQL_STATEMENT);
    $Num_Of_Rows = mysqli_num_rows($result);
    if($Num_Of_Rows > 0 ){
        $row = mysqli_fetch_assoc($result);
        if($row['Password'] == $Psw){
            return true;
        }else{
            return false;
        }
            }else{
            return false;
        }
}


function Login($conn,$Unam,$Psw){
    if(!SearchForUsername($conn,$Unam)){
        return false;
    }else{
        if(CheckPassword($conn,$Psw,GetId($conn,$Unam))){
            return true;
        }else{
            return false;        }

    }
}

/**
 * Created by PhpStorm.
 * User: avaca
 * Date: 11/23/2017
 * Time: 2:09 AM
 */