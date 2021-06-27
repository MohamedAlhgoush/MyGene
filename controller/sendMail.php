<?php
session_start();
include("../Connection.php");
//get id
$id = $_POST['hospital_id'];
// select data from database
$query = "select * from users where hospital_id =$id";
$getdata=mysqli_query($con,$query) or die(mysqli_error($con));
$result = mysqli_fetch_assoc($getdata); /* 2 */
$resultstring2 = $result['Email']; /* 2 */
$resultstring3 = $result['active']; 
$resultstring4 = $result['registerd'];
$resultstring5 = $result['hospital_id'];
$rand=rand(1000,9999);
// check the data if correct
if(($id == $resultstring5) && ($resultstring3 == 0) && ($resultstring4 == 0))
{

    header("Location: ../index.php?page=forget-password&exits=no");
}
else if(($id == $resultstring5) && ($resultstring3 == 1) && ($resultstring4 == 0))
{

    header("Location: ../index.php?page=forget-password&exits=no");
}
// send mail to reciver with varification code
else{
$to_email = $resultstring2;
$subject = "Verification Code";
$body =nl2br("Please Use This Number To Reset Your Password  ".$rand);
$headers = "From: MyGene Community";
$query2 = "INSERT INTO password_reset (hospital_id,random) VALUES('$id','$rand') ";
mysqli_query($con,$query2) or die(mysqli_error($con));
if (mail($to_email, $subject, $body, $headers)) {
    header("Location: ../index.php?page=Reset_Action&hos=".$id);
} else {
    header("Location: ../index.php?page=forget-password&exits=no");
}
}
echo $token;
echo $rand;
?>