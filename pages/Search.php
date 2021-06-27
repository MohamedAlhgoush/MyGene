<html lang="en">
<head>
<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script language="JavaScript" type="text/javascript">
function confirmationDelete(anchor)
{
   var conf = confirm('Do You Want To Favorates This Mutation?');
   if(conf)
      window.location=anchor.attr("action");
}
</script>
<style>
input[type="submit"] {
    font-family: "Font Awesome 5 Free";
    font-size: 1.3333333333333333em;
    font-weight: 900;
}
</style>
</head>
<div class="form-group">
    <?php
include("Connection.php");
// get the submitted value
// search in database 
if(isset($_POST['submit'])){ 
$q = $_POST['quary'];
$output=" ";
$query3 = "SELECT gene,ens,cDNA,aa,e_source,submited_type,FDA_for_same,FDA_for_other,investigational_for_same,ct_title,preclinical_for_same,preclinical_generic from upload_mutation where `gene` LIKE '%".$q."%' OR (`ens` LIKE '%".$q."%')
UNION ALL
SELECT gene,ens,cDNA,aa,e_source,submited_type,FDA_for_same,FDA_for_other,investigational_for_same,ct_title,preclinical_for_same,preclinical_generic from upload where `gene` LIKE '%".$q."%' OR (`ens` LIKE '%".$q."%')
";
$resultq3 = mysqli_query($con,$query3) or die(mysqli_error($con));
?>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-12 well">
                <fieldset onload="getDataFunction()">
                    <legend class="text-center">
                        <h1>Search Results</h1>
                    </legend>

                    <?php
// if user is sing in
if(isset($_SESSION['ID'])){
  // if search is empty
  if(empty($q)){
    echo $output = '<h2>No result found!</h2>';exit();
  }
// if search non latin characters
  if(preg_match('/[^\\p{Common}\\p{Latin}]/u', $q) == 1){
    echo $output = '<h2>No result found! non-latian characters</h2>';exit();
  }
  // if result empty
  if(mysqli_num_rows($resultq3) == 0){
    
  echo $output = '<h2>No result found!</h2>';exit();
}
// if get data from database display it
else if(mysqli_num_rows($resultq3)){
  echo '<div class="form-group " style="width:100%;overflow-x:auto;"><table class="table table-striped table-bordered table-condensed table-hover" id ="search_table" cellspacing="0"
width="10%"" align = "center">
<thead style="color:#31708f;">
  <tr>

  <th>Gene</th>

  <th>ENS</th>

  <th>FDA_For_Same</th>

  <th>FDA_For_Other</th>

  <th>cDNA</th>

  <th>aa</th>

  <th>E_Source</th>

  <th>C_Title</th>

  <th>Inv._For_Same</th>

  <th>Preclinical_For_Same</th>

  <th>Preclinical_Generic</th>

  <th>Favorite</th>

  <th>PDF</th>
 
</tr>
</thead>';
while($row=mysqli_fetch_array($resultq3)){
  $gene=$row['gene'];
  $ens=$row['ens'];
  $cdna=$row['cDNA'];
  $aa=$row['aa'];
  $e_source=$row['e_source'];
  $fda_for_same=$row['FDA_for_same'];
  $fda_for_other=$row['FDA_for_other'];
  $c_title=$row['ct_title'];
  $inv_for_same=$row['investigational_for_same'];
  $preclinical_for_same=$row['preclinical_for_same'];
  $preclinical_generic=$row['preclinical_generic'];
  

echo "<tr>";

  echo "<td>" . $gene . "</td>";

  echo "<td>" . $ens . "</td>";

  echo "<td>" . $fda_for_same . "</td>";

  echo "<td>" . $fda_for_other . "</td>";

  echo "<td>" . $cdna . "</td>";

  echo "<td>" . $aa . "</td>";

  echo "<td>" . $e_source . "</td>";

  echo "<td>" . $c_title . "</td>";

  echo "<td>" . $inv_for_same . "</td>";

  echo "<td>" . $preclinical_for_same . "</td>";

  echo "<td>" . $preclinical_generic . "</td>";

  if(isset($_SESSION['ID'])){
    $user_id = $_SESSION['ID'];
    $Check_exist = "SELECT * from favorates where aa_id = '$aa'"." and user_id = $user_id";
    $resultCheck = mysqli_query($con,$Check_exist)or die(mysqli_error($con));
    if(mysqli_num_rows($resultCheck) == 0){
    echo "<td><form action='controller/faviorateAction.php?aa=" . $row['aa'] . "' 
    method = 'Post' onclick='javascript:confirmationDelete($(this));return false;'><button type='submit' style='padding: 5px ;margin-left:10px;'class='btn btn-sm btn-primary'>
    <i class='glyphicon glyphicon-bookmark'></i></button></form></td>";
    }
    else{
      echo "<td><button type='submit' style='padding: 5px ;margin-left:10px;'class='btn btn-sm btn-primary' title='Exist in Favorite' disabled>
      <i class='glyphicon glyphicon-bookmark'></i></button></form></td>";
    }
} 
echo "<td><form target='_blank' action='pages/pdfGenerate.php?aa=" . $row['aa'] . "' 
method = 'Post'><button type='submit' style='padding: 5px ;margin-left:10px;'class='btn btn-sm btn-primary'>
<i class='fa fa-file-pdf-o' aria-hidden='true'></i></button></form></td>";


echo "</>";
  echo "</div>";

  }
echo "</table> </div>";
}
}
// if user not signing in
else
{
  if(empty($q)){
    echo $output = '<h2>No result found!</h2>';exit();
  }

  if(preg_match('/[^\\p{Common}\\p{Latin}]/u', $q) == 1){
    echo $output = '<h2>No result found! non-latian charactes</h2>';exit();
  }

  if(mysqli_num_rows($resultq3) == 0){
    
  echo $output = '<h2>No result found!</h2>';exit();
}
  
  else if(mysqli_num_rows($resultq3)){
    echo '<div class="form-group " style="width:100%;overflow-x:auto;"> <table class="table table-striped table-bordered table-condensed table-hover" id ="search_table" cellspacing="0"
  width="100%"" align = "center">
  <thead style="color:#31708f;">
    <tr>
  
    <th>Gene</th>
  
    <th>ENS</th>
  
    <th>FDA_For_Same</th>
  
    <th>FDA_For_Other</th>
  
    <th>cDNA</th>
  
    <th>aa</th>
  
    <th>E_Source</th>
  
    <th>C_Title</th>
  
    <th>Inv._For_Same</th>
  
    <th>Preclinical_For_Same</th>
  
    <th>Preclinical_Generic</th>

    <th>PDF</th>

   
  </tr>
  </thead>';
  while($row=mysqli_fetch_array($resultq3)){
    $gene=$row['gene'];
    $ens=$row['ens'];
    $cdna=$row['cDNA'];
    $aa=$row['aa'];
    $e_source=$row['e_source'];
    $fda_for_same=$row['FDA_for_same'];
    $fda_for_other=$row['FDA_for_other'];
    $c_title=$row['ct_title'];
    $inv_for_same=$row['investigational_for_same'];
    $preclinical_for_same=$row['preclinical_for_same'];
    $preclinical_generic=$row['preclinical_generic'];
    
  
  echo "<tr>";
  
    echo "<td>" . $gene . "</td>";
  
    echo "<td>" . $ens . "</td>";
  
    echo "<td>" . $fda_for_same . "</td>";
  
    echo "<td>" . $fda_for_other . "</td>";
  
    echo "<td>" . $cdna . "</td>";
  
    echo "<td>" . $aa . "</td>";
  
    echo "<td>" . $e_source . "</td>";
  
    echo "<td>" . $c_title . "</td>";
  
    echo "<td>" . $inv_for_same . "</td>";
  
    echo "<td>" . $preclinical_for_same . "</td>";
  
    echo "<td>" . $preclinical_generic . "</td>";
  
    echo "<td><form target='_blank' action='pages/pdfGenerate.php?aa=" . $row['aa'] . "' 
    method = 'Post'><button type='submit' style='padding: 5px ;margin-left:10px;'class='btn btn-sm btn-primary'>
    <i class='fa fa-file-pdf-o' aria-hidden='true'></i></button></form></td>";
  
    echo "</>";
  
    }
  echo "</table>";
  }}
}
?>

            </div>
        </div>
    </div>
</div>
<script>
 $(document).ready( function () {
    $('#search_table').DataTable();
} );
</script>
</html>
