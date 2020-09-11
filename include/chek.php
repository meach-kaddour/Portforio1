<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $admin=$_POST['username'];
    $pass=$_POST['Password'];

    include("connection.php");

    $query="SELECT * FROM admins WHERE adminName='$admin' AND passcode='$pass'";
    $execute=$db->query($query);
    
    if($execute==1){
        $_SESSION['admin_login']=$admin;
        header("location:../admin/dash.php");
    }else{
        echo 'wrong admin';
    }

}
else
{
    echo "wrong admin";
}