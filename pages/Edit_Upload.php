<?php
   if (!isset($_SESSION['ID' ])){ // check if the user isn't logedin 
	   header("location:LoginAction.php");
   }
   include("./Connection.php");
$edit=$_GET['edit']; // this code to get the element  we want to edit it
$query="SELECT * FROM upload WHERE id='$edit'";
$getdata=mysqli_query($con,$query) or die(mysqli_error($con));
$error = false;
// error message validation
if (isset($_GET['msg'])) { 
    if ($_GET['msg'] == 'faild' && isset($_GET['err'])) {
        $errors = explode(",", $_GET['err']);
        foreach ($errors as $error) {
            if ($error == 'aa') {
                $error = true;
                $aa_error = "This Filed Is Requierd";
            }
        }
    }
   if ($_GET['msg'] == 'faild2' && isset($_GET['err2'])) {
        $errors = explode(",", $_GET['err2']);
        foreach ($errors as $error) {
            if ($error == 'cDNA') {
                $error = true;
                $cDNA_error = "This Filed Is Requierd";
            }
        }
    }
    if ($_GET['msg'] == 'faild1' && isset($_GET['err1'])) {
        $errors = explode(",", $_GET['err1']);
        foreach ($errors as $error) {
            if ($error == 'ens') {
                $error = true;
                $ens_error = "This Filed Is Requierd";
            }
        }
    }
    if ($_GET['msg'] == 'faild3' && isset($_GET['err3'])) {
        $errors = explode(",", $_GET['err3']);
        foreach ($errors as $error) {
            if ($error == 'gene') {
                $error = true;
                $gene_error = "This Filed Is Requierd";
            }
        }
    }
    if ($_GET['msg'] == 'faild4' && isset($_GET['err4'])) {
        $errors = explode(",", $_GET['err4']);
        foreach ($errors as $error) {
            if ($error == 'aa') {
                $error = true;
                $aa_error = "This Filed Is Requierd";
            }
            if ($error == 'cDNA') {
                $error = true;
                $cDNA_error = "This Filed Is Requierd";
            }
            if ($error == 'ens') {
                $error = true;
                $ens_error = "This Filed Is Requierd";
            }
            if ($error == 'gene') {
                $error = true;
                $gene_error = "This Filed Is Requierd";
            }
        }
    }
    if ($_GET['msg'] == 'faild5' && isset($_GET['err5'])) {
        $errors = explode(",", $_GET['err5']);
        foreach ($errors as $error) {
            if ($error == 'aa') {
                $error = true;
                $aa_error = "This Filed Is Requierd";
            }
            if ($error == 'cDNA') {
                $error = true;
                $cDNA_error = "This Filed Is Requierd";
            }
        }
    }
    if ($_GET['msg'] == 'faild6' && isset($_GET['err6'])) {
        $errors = explode(",", $_GET['err6']);
        foreach ($errors as $error) {
            if ($error == 'aa') {
                $error = true;
                $aa_error = "This Filed Is Requierd";
            }
            if ($error == 'ens') {
                $error = true;
                $ens_error = "This Filed Is Requierd";
            }
        }
    }
    if ($_GET['msg'] == 'faild7' && isset($_GET['err7'])) {
        $errors = explode(",", $_GET['err7']);
        foreach ($errors as $error) {
            if ($error == 'aa') {
                $error = true;
                $aa_error = "This Filed Is Requierd";
            }
            if ($error == 'gene') {
                $error = true;
                $gene_error = "This Filed Is Requierd";
            }
        }
    }
    if ($_GET['msg'] == 'faild8' && isset($_GET['err8'])) {
        $errors = explode(",", $_GET['err8']);
        foreach ($errors as $error) {
            if ($error == 'cDNA') {
                $error = true;
                $cDNA_error = "This Filed Is Requierd";
            }
            if ($error == 'ens') {
                $error = true;
                $ens_error = "This Filed Is Requierd";
            }
        }
    }
    if ($_GET['msg'] == 'faild9' && isset($_GET['err9'])) {
        $errors = explode(",", $_GET['err9']);
        foreach ($errors as $error) {
            if ($error == 'cDNA') {
                $error = true;
                $cDNA_error = "This Filed Is Requierd";
            }
            if ($error == 'gene') {
                $error = true;
                $gene_error = "This Filed Is Requierd";
            }
        }
    }
    if ($_GET['msg'] == 'faildx' && isset($_GET['errx'])) {
        $errors = explode(",", $_GET['errx']);
        foreach ($errors as $error) {
            if ($error == 'gene') {
                $error = true;
                $gene_error = "This Filed Is Requierd";
            }
            if ($error == 'ens') {
                $error = true;
                $ens_error = "This Filed Is Requierd";
            }
        }
    }
}
  
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MyGene</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/script.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <!-- Java Script Function to Confirm Edit Element -->
        <script language="JavaScript" type="text/javascript">
        function confirmationDelete(anchor) 
        {
        var conf = confirm('Are You Want To Save This Changes?');
        if(conf)
            window.location=anchor.attr("action");
        }
        </script>
    </head>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="text-center" style="color:#00B4CC;">
            <h2>Edit Upload Mutaion Form</h2>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <form id="edit-profile-form" method="POST" id="form" action="controller/Edit_UploadAction.php">
                    <?php
                    $name=mysqli_fetch_array($getdata) // pring data from database and fill it on thhe form
                 ?>
                    <div class="form-group">
                        <label for="inputText1" class="col-form-label">FDA For Other</label>
                        <input id="fda_for_other" name="FDA_for_other" type="text" placeholder="p.E173K"
                            class="form-control" value="<?php echo $name['FDA_for_other']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputText2" class="col-form-label">FDA For Same</label>
                        <input id="fda_for_same" name="FDA_for_same" type="text" placeholder="p.E173K"
                            class="form-control" value="<?php echo $name['FDA_for_same']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">AA</label>
                        <input id="aa" name="aa" type="text" placeholder="p.E173K" class="form-control"
                            value="<?php echo $name['aa']; ?>">
                            <span class="text-danger"><?php if (isset($aa_error)) echo $aa_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="inputTex4">cDNA</label>
                        <input id="cDNA" name="cDNA" type="text" placeholder="c.517G+AD4-A" class="form-control" 
                            value="<?php echo $name['cDNA']; ?>">
                            <span class="text-danger"><?php if (isset($cDNA_error)) echo $cDNA_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="inputText5" class="col-form-label">CT Title</label>
                        <input id="ct_title" name="ct_title" type="text" placeholder="p.E173K" class="form-control"
                            value="<?php echo $name['ct_title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputText6" class="col-form-label">E Source</label>
                        <input id="e_source" name="e_source" type="text" placeholder="p.E173K" class="form-control"
                            value="<?php echo $name['e_source']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputTex7" class="col-form-label">ENS</label>
                        <input id="ens" name="ens" type="text" class="form-control" placeholder="ENST00000471979" 
                            value="<?php echo $name['ens']; ?>">
                            <span class="text-danger"><?php if (isset($ens_error)) echo $ens_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="inputTex8">Gene</label>
                        <input id="gene" name="gene" type="text" placeholder="PACRGL" class="form-control" 
                            value="<?php echo $name['gene']; ?>">
                            <span class="text-danger"><?php if (isset($gene_error)) echo $gene_error; ?></span> 
                    </div>
                    <div class="form-group">
                        <label for="inputText9" class="col-form-label">Investigational For Same</label>
                        <input id="inv_for_same" name="investigational_for_same" type="text" placeholder="p.E173K"
                            class="form-control" value="<?php echo $name['investigational_for_same']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputText10" class="col-form-label">Preclinical For Same</label>
                        <input id="preclinical_for_same" name="preclinical_for_same" type="text" placeholder="p.E173K"
                            class="form-control" value="<?php echo $name['preclinical_for_same']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputTex11">Preclinical Generic</label>
                        <input id="generic" name="preclinical_generic" type="text" placeholder="/N" class="form-control"
                            value="<?php echo $name['preclinical_generic']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputTex12">Submited Type</label>
                        <input id="submited" name="submited_type" type="text" placeholder="melanoma"
                            class="form-control" value="<?php echo $name['submited_type']; ?>">
                    </div>
                    
                    <div class="container">
                        <div class="col-md-12">
                            <div class="form-group pull-right">
                            <input type="hidden" name="id" id="id"  value="<?php  echo $name['id']; ?>"/>
                                <input type="submit" name="signup" value="Save" class="btn btn-primary" style="width: 150px;" onclick="javascript:confirmationDelete($(this))";return false></input>
                                <button type="reset" class="btn btn-success">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</html>