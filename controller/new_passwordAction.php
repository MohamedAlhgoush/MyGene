<?php
session_start();
include("../Connection.php");
// get id
$id = $_GET['hos2'];
// check value and redirect to new password page
if(isset($_POST['submit1'])){ 
    $q = $_POST['random'];
    $query2 = "SELECT random FROM password_reset where random = '$q'";
    $result2 = mysqli_query($con, $query2);
    $y = mysqli_fetch_assoc($result2); /* 2 */
    $resulty = $y['random'];
    if(!empty($resulty)){    
        header("Location: ../index.php?page=new_password&hos2=" .$id. "&rand=".$resulty);
}
    if($q != $resulty){    
        echo "Verifecation Code is incorect";
    }
}

?>