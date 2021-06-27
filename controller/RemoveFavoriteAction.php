<?php
session_start();
include("../Connection.php");
$_SESSION['ID'];
$user_id = $_SESSION['ID'];
// get key and remove favoirate mutation
if(isset($_GET['aa'])){
    $AA = urlencode($_GET['aa']);
    $query = "DELETE from favorates where aa_id = '$AA'"." and user_id = $user_id";
    $result = mysqli_query($con,$query)or die(mysqli_error($con));
    header('Location: ../index.php?page=profile');
}

?>