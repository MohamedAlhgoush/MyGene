<!--Change password Action-->
<?php
// start session
session_start();
$_SESSION['DrId'];
$user_id = $_SESSION['DrId'];
if(!isset($_SESSION['ID'])){
    header("Login.php");
}
include("../Connection.php");
// get data from inputs fields 
$error = false;
$str = "test";
$old_password = $_POST['old_password'];
$new_password =$_POST['new_password'];
$query1 = "select password from users WHERE hospital_id = $user_id" ;
$get_old_password = mysqli_query($con, $query1);
// get old password from database
$password = mysqli_fetch_array($get_old_password)['password'];

// update old password
if(!$error){
    if(trim($old_password) == trim($password)){
        $qry = "UPDATE users SET password = '$new_password' WHERE hospital_id = '$user_id'";
        mysqli_query($con, $qry)or die(mysqli_error($con));
        header("Location: ../index.php?page=change-password&exits=yes");

    }else{
        header("Location: ../index.php?page=change-password&exits=no");
            

        }
    }else{
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=change-password&msg=faild&err=" . $str);
}        

?>   
