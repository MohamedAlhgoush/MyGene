<!-- Delete Uploded mutation Action-->
<?php
 session_start();
   if (!isset($_SESSION['ID' ])){
	   header("location:LoginAction.php");
   }
   include("../Connection.php");
$ID=$_GET['id'];
// delete query
$qry = "DELETE FROM Upload where id='$ID'";

mysqli_query($con,$qry) or die(mysqli_error($con));
	 
header('Location: ../index.php?page=profile');
?>