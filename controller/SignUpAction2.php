<!--signup Action-->
<?php
include("../Connection.php");
$error = false;
$Hospital_id = $_POST['hospital_id']; // variable to save value of hospital id Entered by the user
$Password = $_POST['password']; // variable to save value of password Entered by the user
$R_Pass = $_POST['re_password']; // variable to save value of repeated password Entered by the user
// this 3 if's to check if the usser missed on of this condition <Password & Repeat Password & Agrre terms>
if (!isset($_POST['agree'])) {
	$str = $str . 'agree,';
	$error = true;
}
if (strlen($Password) < 6) {
	$str = $str . 'password,';
	$error = true;
}
if (($R_Pass) != ($Password) ) {
	$str = $str . 're_password,';
	$error = true;
}
// check if two passwordw are equal and if the id allowed to register

if ($Password == $R_Pass){
	$query="SELECT * FROM users WHERE hospital_id='".$Hospital_id."'"; //in this query we select all data from table users and check if hospital id is the same of hospital id Entered by the user
	$q = mysqli_query($con,$query) or die(mysqli_error($con));   /* 1 */ // this three line to fetch the hospital id value from database
	$result = mysqli_fetch_assoc($q);  /* 2 */ // in result we fetch the data and put it in q value
    $resultstring = $result['hospital_id'];  /* 3 */ // in result string value we save the hospital id which fetched from database

    $query2="SELECT registerd FROM users"; //in this query we select register value from table users 
	$q2 = mysqli_query($con,$query2) or die(mysqli_error($con));   /* 1 */ // this three line to fetch the registerd status from database
	$result2 = mysqli_fetch_assoc($q2);  /* 2 */ // in result we fetch the data and put it in q2 value
    $resultstring2 = $result['registerd'];  /* 3 */ // in result string value we save the registerd value which fetched from database
	
	if ($Hospital_id != $resultstring){ // comparing equality of hospital id entered by the user and hospital id value from database  
		header("Location: ../index.php?page=SignUp&exits=null"); // if the hospital id entered by the user doesn't exist it send null to show error message
    }
    if (($Hospital_id == $resultstring) && ($resultstring2 == 0) ){ // comparing equality of hospital id entered by the user and hospital id value from database
        $qry="UPDATE users SET registerd = 1, password = '$Password '  WHERE hospital_id = '$Hospital_id'"; // this query to update user password and status 
        mysqli_query($con,$qry);
        header("Location: ../index.php?page=SignUp&exits=yes");
    }
    if (($Hospital_id == $resultstring) && ($resultstring2 == 1) ){ // comparing equality of hospital id entered by the user and hospital id value from database
		header("Location: ../index.php?page=SignUp&exits=no");
    }

}	  
else {
$str = substr($str, 0, strlen($str) - 1);
header("Location: ../index.php?page=SignUp&msg=faild&err=" . $str);
}
?>
