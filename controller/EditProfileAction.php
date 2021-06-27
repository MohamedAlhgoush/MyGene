<!-- edit profile action-->
<?php
include("../Connection.php");
session_start();
$_SESSION['ID'];
$iduser=$_SESSION['ID'];
$name=$_POST['name'];
$email=$_POST['email'];
$department=$_POST['department'];
$qry="UPDATE users SET FullName = '$name', Email = '$email', Department = '$department'  WHERE ID = '$iduser'";
mysqli_query($con,$qry)or die(mysqli_error($con));
header('Location: ../index.php?page=profile');
?>
