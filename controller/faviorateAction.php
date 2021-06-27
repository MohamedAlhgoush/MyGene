<!--Favorite mutation-->
<?php
session_start();
include("../Connection.php");
$_SESSION['ID'];
$user_id = $_SESSION['ID'];
if(!isset($_SESSION['ID'])){
    header("./index.php?page=Login");
}
//insert key to table in database with doctor id
if(isset($_GET['aa'])){
    $AA = urlencode($_GET['aa']);
    $Check_exist = "SELECT * from favorates where aa_id = '$AA'"." and user_id = $user_id";
    $resultCheck = mysqli_query($con,$Check_exist)or die(mysqli_error($con));
    if(mysqli_num_rows($resultCheck) == 0){
    $query = "insert into favorates(aa_id, user_id) values('" . urlencode($_GET['aa']) . "', '" .$user_id . "')";
    mysqli_query($con,$query);
    header('Location: ../index.php?page=profile');
    }
else{
    header('Location: ../index.php?page=home');
}

}

?>