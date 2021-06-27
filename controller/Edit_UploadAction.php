<!-- Edit Ulpoded Mutation Action-->
<?php

session_start();
// check if user loging in
   if (!isset($_SESSION['ID'])){
	   header("location:LoginAction.php");
   }

   // send data to upload page to edit and save the change
include("../Connection.php");
    $fda_for_other=addslashes($_POST['FDA_for_other']);
    $fda_for_same=addslashes($_POST['FDA_for_same']);
    $aa=addslashes($_POST['aa']);
    $Cdna=addslashes($_POST['cDNA']);
    $ct_title=addslashes($_POST['ct_title']);
    $e_source=addslashes($_POST['e_source']);
    $ens=addslashes($_POST['ens']);
    $gene=addslashes($_POST['gene']);
    $inv_for_same=addslashes($_POST['investigational_for_same']);
    $preclinical_for_same=addslashes($_POST['preclinical_for_same']);
    $generic=addslashes($_POST['preclinical_generic']);
    $submited=addslashes($_POST['submited_type']);
    $userid = $_POST['id'];

$str = "";
$error = false;
// check errors
if (empty(($aa))) {
	$str = $str . 'aa,';
	$error = true;
}

if (empty(($Cdna))) {
	$str = $str . 'cDNA,';
	$error = true;
}
if (empty(($gene))) {
	$str = $str . 'gene,';
	$error = true;
}

if (empty(($ens))) {
	$str = $str . 'ens,';
	$error = true;
}
// check if some fields are empty
if($error){
    if(empty($aa)){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Edit_Upload&edit=".$userid."&msg=faild&err=" . $str);
    }
   if(empty($ens)  ){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Edit_Upload&edit=".$userid."&msg=faild1&err1=" . $str);
    }
    if(empty($Cdna) ){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Edit_Upload&edit=".$userid."&msg=faild2&err2=" . $str);
    }
    if(empty($gene) ){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Edit_Upload&edit=".$userid."&msg=faild3&err3=" . $str);
    }
    if(empty($aa) && empty($Cdna) && empty($ens) && empty($gene)){
        $str = substr($str, 0, strlen($str) - 1);
        header("Location: ../index.php?page=Edit_Upload&edit=".$userid."&msg=faild4&err4=" . $str);
      }
    if(empty($aa) && empty($Cdna) ){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Edit_Upload&edit=".$userid."&msg=faild5&err5=" . $str);
    }
    if(empty($aa) &&  empty($ens) ){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Edit_Upload&edit=".$userid."&msg=faild6&err6=" . $str);
    }
    if(empty($aa) && empty($gene)){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Edit_Upload&edit=".$userid."&msg=faild7&err7=" . $str);
    }
    if(empty($Cdna) && empty($ens) ){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Edit_Upload&edit=".$userid."&msg=faild8&err8=" . $str);
    }
    if(empty($Cdna) && empty($gene)){
    $str = substr($str, 0, strlen($str) - 1);
    header("Location: ../index.php?page=Edit_Upload&edit=".$userid."&msg=faild9&err9=" . $str);
    }
    if(empty($gene) && empty($ens)){
        $str = substr($str, 0, strlen($str) - 1);
        header("Location: ../index.php?page=Edit_Upload&edit=".$userid."&msg=faildx&errx=" . $str);
        }
        
}
// if no errors update the mutation
else{
	$qry = (" UPDATE upload SET FDA_for_other ='$fda_for_other', FDA_for_same = '$fda_for_same', aa = '$aa', cDNA = '$Cdna', ct_title = '$ct_title' , e_source = '$e_source'
    , ens = '$ens', gene = '$gene',investigational_for_same = '$inv_for_same', preclinical_for_same = '$preclinical_for_same', preclinical_generic = '$generic', submited_type = '$submited' WHERE id = '$userid' ") ;
    mysqli_query($con,$qry)or die(mysqli_error($con));
    header('Location: ../index.php?page=profile');
}
?>
