<?php
session_start();
include("../Connection.php");
//get random number
$ran = $_GET['random'];

$str = "";
$error = false;
//check if empty
if (empty(($new))) {
	$str = $str . 'new,';
	$error = true;
}
// get new pass
if (isset($_POST['new_password'])) {
    $new_pass = mysqli_real_escape_string($con, $_POST['new_pass']);
    $new_pass_c = mysqli_real_escape_string($con, $_POST['new_pass_c']);
    if  (empty($new_pass) || empty($new_pass_c)) {
        $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=new_password&msg=faild&err=" . $str);
    }
    // if two password not equal
    if ($new_pass != $new_pass_c) {
        $str = substr($str, 0, strlen($str) - 1);
        header("Location: ../index.php?page=new_password&hos2=" .$id. "&rand=".$ran."&msg=faild&err=" . $str);
    };
    if (!(empty($new_pass) && empty($new_pass_c)) && ($new_pass == $new_pass_c) ) {
    $sql = "SELECT * FROM password_reset WHERE random='$ran'";
    $results = mysqli_query($con, $sql);
    $hos_id = mysqli_fetch_assoc($results)['hospital_id'];
// update the password
    if ($hos_id) {
        $new_pass = $new_pass;
        $sql = "UPDATE users SET password='$new_pass' WHERE hospital_id='$hos_id'";
        $updUser = mysqli_query($con, $sql);

        if ($updUser > 0) {
            $sql = "DELETE  FROM password_reset WHERE hospital_id='$hos_id' and random='$ran'";
            $deletrand = mysqli_query($con,$sql)or die(mysqli_error($con));
            
        }

  header('Location: ../index.php?page=ErrorShow&exits=yes');
    }
}
}
?>