<!--Upload mutation Action-->
<?php
session_start();
   if (!isset($_SESSION['ID'])){
	   header("location:LoginAction.php");
   }
include("../Connection.php");
  $fda_for_same=$_POST['FDA_for_same'];
  $fda_for_other=$_POST['FDA_for_other'];
  $aa=$_POST['aa'];
	$Cdna=$_POST['cDNA'];
  $ct_title=$_POST['ct_title'];
  $e_source=$_POST['e_source'];
	$Ens=$_POST['ens'];
	$Gene=$_POST['gene'];
  $inv_for_same=$_POST['investigational_for_same'];
  $preclinical_for_same=$_POST['preclinical_for_same'];
	$Generic=$_POST['preclinical_generic'];
  $Submited=$_POST['submited_type'];
  $dr_id=$_SESSION['DrId'];

$str = "";
$error = false;
// check if some fields empty rise error
if (empty(($aa))) {
	$str = $str . 'aa,';
	$error = true;
}

if (empty(($Cdna))) {
	$str = $str . 'cDNA,';
	$error = true;
}
if (empty(($Gene))) {
	$str = $str . 'gene,';
	$error = true;
}

if (empty(($Ens))) {
	$str = $str . 'ens,';
	$error = true;
}
// check if null
if($error){
	if(empty($aa)){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Upload&msg=faild&err=" . $str);
  }
  if(empty($Cdna)){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Upload&msg=faild1&err1=" . $str);
  }
  if(empty($Ens)){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Upload&msg=faild2&err2=" . $str);
  }
  if(empty($Gene)){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Upload&msg=faild3&err3=" . $str);
  }
  if(empty($aa) && empty($Cdna) && empty($Ens) && empty($Gene)){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Upload&msg=faild4&err4=" . $str);
  }
  if(empty($aa) && empty($Cdna) ){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Upload&msg=faild5&err5=" . $str);
  }
  if(empty($aa) &&  empty($Ens) ){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Upload&msg=faild6&err6=" . $str);
  }
  if(empty($aa) && empty($Gene)){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Upload&msg=faild7&err7=" . $str);
  }
  if(empty($Cdna) && empty($Ens) ){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Upload&msg=faild8&err8=" . $str);
  }
  if(empty($Cdna) && empty($Gene)){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Upload&msg=faild9&err9=" . $str);
  }
  if(empty($Gene) && empty($Ens)){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Upload&msg=faildx&errx=" . $str);
  }

}
// insert to database
else {
	$qry = "INSERT INTO upload(FDA_for_other,FDA_for_same,aa,cDNA,ct_title,e_source,ens,gene,investigational_for_same,preclinical_for_same,preclinical_generic,submited_type,dr_id)
   VALUES ('$fda_for_other','$fda_for_same','$aa','$Cdna','$ct_title','$e_source','$Ens','$Gene','$inv_for_same','$preclinical_for_same','$Generic','$Submited','$dr_id')";
   mysqli_query($con,$qry);
   header('Location: ../index.php?page=profile');
	 }
?>
