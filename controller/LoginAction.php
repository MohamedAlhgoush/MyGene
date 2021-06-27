<!--Login Action-->
<?php
session_start();
include("../Connection.php");
// get id and password
$Hospital_id =addslashes($_POST['hospital_id']);
$Password=addslashes($_POST['password']);
// check if id exist
$query="SELECT * FROM users WHERE hospital_id='".$Hospital_id."'and password='".$Password."'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$str = "";
$error = false;
//check password
if (strlen($Password) < 6) {
	$str = $str . 'password,';
	$error = true;
}
//check id
if (strlen($Hospital_id) < 3) {
	$str = $str . 'hospital_id,';
	$error = true;
}
// fill the session with data
if(mysqli_num_rows($result)>0)
{
		while($row = mysqli_fetch_array($result))
	{
		$_SESSION['fname'] = $Hospital_id;
		$_SESSION['ID']=$row ['ID'];
		$_SESSION['DrId'] = $row ['hospital_id']; //DrId is a variable & hospital_Id Variable From database
		$_SESSION['Name'] = $row ['FullName'];
		$_SESSION['email'] = $row ['Email'];
		$_SESSION['department'] = $row ['Department'];
		$is_active = $row['active'];
		$is_registerd = $row['registerd'];

	}
		if($is_active == 1 && $is_registerd == 1 ){
			header("Location: ../index.php");

		}
		if (($is_active == 0) && ($is_registerd) ==  1){
			$qry="UPDATE users SET active = 1  WHERE hospital_id = '$_SESSION[DrId]'";
			mysqli_query($con,$qry)or die(mysqli_error($con));
			header("Location: ../index.php?page=Edit_Profile");
		}
}
//rise error function
else {
	$str = substr($str, 0, strlen($str) - 1);
	header("Location: ../index.php?page=Login&msg=faild&err=" . $str);
}
?>
