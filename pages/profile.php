<?php
include("./Connection.php");
$_SESSION["ID"];
$userid=$_SESSION['ID'];
 if(!isset($_SESSION['ID'])){
header("Login.php");}

$query1="select * from users WHERE ID=$userid" ;
$getdata1=mysqli_query($con,$query1) or die(mysqli_error($con));

$qry="select hospital_id from users WHERE ID=$userid";
$q = mysqli_query($con,$qry);
$result = mysqli_fetch_assoc($q);
$resultstring = $result['hospital_id'];
$query2="select * from upload WHERE dr_id = '$resultstring'";
$getdata2=mysqli_query($con,$query2) or die(mysqli_error($con));
$query3 = "select upload_mutation.* from favorates inner join upload_mutation on upload_mutation.aa = favorates.aa_id where favorates.user_id=" . $userid;
$getdata3=mysqli_query($con,$query3) or die(mysqli_error($con));
$query4 = "select upload.* from favorates inner join upload on upload.aa = favorates.aa_id where favorates.user_id=" . $userid;
$getdata4=mysqli_query($con,$query4) or die(mysqli_error($con));


?>
<html>

<head>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script language="JavaScript" type="text/javascript">
    function confirmationDelete(anchor) {
        var conf = confirm('Are you sure you want to delete this record?');
        if (conf)
            window.location = anchor.attr("href");
    }
    </script>
</head>
<!-- profile container layout-->
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-12 well">
            <fieldset onload="getDataFunction()">
                <legend class="text-center">
                    <h1>Profile Information</h1>
                </legend>

                <legend class="alert alert-info">
                    Personal Information
                    <span class="pull-right">
                        <a href="./index.php?page=Edit_Profile" data-original-title="Edit" data-toggle="tooltip"
                            type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                    </span>
                </legend>

                <?php
                    while($name=mysqli_fetch_array($getdata1)){
                    ?>
                <div class="form-group">
                    <label style="font-size: 18px;">
                        <span class="glyphicon gg glyphicon-user"></span>
                        <span class="left">Full Name:</span>
                        <span style="margin-left: 50px;color: gray; "><?php echo $name['FullName']?></span>
                    </label>
                </div>
                <div class="form-group">
                    <label style="font-size: 18px;">
                        <span class="fa gg fa-pencil"></span>
                        <span class="left">Department:</span>
                        <span style="margin-left: 50px;color: gray;"><?php echo $name['Department']?> </span>
                    </label>
                </div>
                <div class="form-group">
                    <label style="font-size: 18px;">
                        <span class="glyphicon gg glyphicon-envelope"></span>
                        <span class="left">Email:</span>
                        <span style="margin-left: 50px;color: gray;"><?php echo $name['Email']?></span>
                    </label>
                </div>
                <div class="form-group">
                    <label style="font-size: 18px;">
                        <span class="gg fa fa-users"></span>
                        <span class="left">Hospital ID:</span>
                        <span style="margin-left: 50px;color: gray;"><?php echo $name['hospital_id']?> </span>
                    </label>
                </div>
                <div class="form-group">
                    <label style="font-size: 18px;">
                        <span class="glyphicon gg glyphicon-pencil"></span>
                        <span class="left">Password</span>
                    </label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <label>
                        <a href="./index.php?page=change-password" style="font-size: 18px;"><span
                                class="glyphicon gg glyphicon-exclamation-sign"></span> Change Password</a><br />
                    </label>
                </div>
                <?php }?>
                <div class="form-group">
                    <legend class="alert alert-info">Uploaded Mutations</legend>
                </div>
                <div class="form-group" style="width:100%; overflow-x: auto">
                    <?php
               /* Upload Mutation Code For PHP */       
            if(mysqli_num_rows($getdata2) > 0){
                $index = 0;
                echo '<table class="table table-striped table-bordered table-condensed table-hover" cellspacing="0"
                    width="100%">
                                <thead style="color:#31708f;">
                                <tr>

                                <th class="th-sm">Index</th>

                                <th class="th-sm">Ens</th>

                                <th class="th-sm">Gene</th>

                                <th class="th-sm"> FDA_For_Same </th>

                                <th class="th-sm"> FDA_For_Other </th>

                                <th class="th-sm"> AA </th>

                                <th class="th-sm"> cDNA </th>

                                <th class="th-sm">Ct_Title</th>

                                <th class="th-sm">E_Source</th>

                                <th class="th-sm">Inv_For_Same</th>

                                <th class="th-sm">Preclinical_For_Same</th>

                                <th class="th-sm">Preclinical_Generic</th>

                                <th class="th-sm">Submited_Type</th>

                                <th class="th-sm">Delete</th>

                                <th class="th-sm">Edit</th>

                                <th class="th-sm">PDF</th>

                                </tr>
                                </thead>';
                while($name=mysqli_fetch_array($getdata2)){
                    $fda_for_same =$name['FDA_for_same'];
                    $fda_for_other =$name['FDA_for_other'];
                    $aa =$name['aa'];
                    $cdna =$name['cDNA'];
                    $ct_title =$name['ct_title'];
                    $e_source =$name['e_source'];
                    $ens =$name['ens'];
                    $gene =$name['gene'];
                    $inv_for_same =$name['investigational_for_same'];
                    $preclinical_for_same =$name['preclinical_for_same'];
                    $preclinical_generic =$name['preclinical_generic'];
                    $submited_type =$name['submited_type'];
                    $index += 1;
                    
                                echo "<tr>";

                                echo "<td>" . $index . "</td>";

                                echo "<td>" . $ens . "</td>";

                                echo "<td>" . $gene . "</td>";

                                echo "<td>" . $fda_for_same . "</td>";

                                echo "<td>" . $fda_for_other . "</td>";

                                echo "<td>" . $aa . "</td>";

                                echo "<td>" . $cdna . "</td>";

                                echo "<td>" . $ct_title . "</td>";

                                echo "<td>" . $e_source . "</td>";

                                echo "<td>" . $inv_for_same . "</td>";

                                echo "<td>" . $preclinical_for_same . "</td>";

                                echo "<td>" . $preclinical_generic . "</td>";

                                echo "<td>" . $submited_type . "</td>";

                                echo  "<td><a href=controller/Delete_UploadedAction.php?id=".$name['id']."
                                 onclick='javascript:confirmationDelete($(this));return false;' class='btn btn-sm btn-danger' type='button' ><i class='glyphicon glyphicon-trash'></i></a></td>";
                                echo"<td> <a href=./index.php?page=Edit_Upload&edit=".$name['id']." class='btn btn-sm btn-warning' type='button'><i class='glyphicon glyphicon-edit'></i></a></td>";

                                echo "<td><form target='_blank' action='pages/pdfGenerate.php?aa=" . $name['aa'] . "' 
                                method = 'Post'><button type='submit' style='padding: 5px ;margin-left:10px; margin-right:10px;'class='btn btn-sm btn-primary'>
                                <i class='fa fa-file-pdf-o' aria-hidden='true'></i></button></form></td>";

                                echo "</tr>";
                                    
                                }
                                echo "</table>";
                            }
                                else
                                {
                                $output = '<h2>You Are Not Uploaded Any Thing Yet!</h2>';
                                echo $output;
                                }
                     /* End Of Code Upload Mutaion php */           
                    
                    ?>

                </div>
                <div class="form-group">
                    <legend class="alert alert-info">Favorite Mutations</legend>
                </div>
                <div class="form-group" style="width:100%; overflow-x: auto">
                    <?php
        if(mysqli_num_rows($getdata3) > 0 || mysqli_num_rows($getdata4) > 0){
            $index = 0;
    echo '<table class="table table-striped table-bordered table-condensed table-hover" cellspacing="0" width="100%">
        <thead style="color:#31708f;">
        <tr>
        <th class="th-sm">Index</th>

        <th class="th-sm">Ens</th>

        <th class="th-sm">Gene</th>

        <th class="th-sm"> FDA_For_Same </th>

        <th class="th-sm"> FDA_For_Other </th>

        <th class="th-sm"> AA </th>

        <th class="th-sm"> cDNA </th>

        <th class="th-sm">Ct_Title</th>

        <th class="th-sm">E_Source</th>

        <th class="th-sm">Inv_For_Same</th>

        <th class="th-sm">Preclinical_For_Same</th>

        <th class="th-sm">Preclinical_Generic</th>

        <th class="th-sm">Submited_Type</th>

        <th class="th-sm">PDF</th>

        <th class="th-sm">Remove Favorite</th>
        
        </tr>
        </thead>';
        
            while($name=mysqli_fetch_array($getdata3)){
                
                $fda_for_same =$name['FDA_for_same'];
                $fda_for_other =$name['FDA_for_other'];
                $aa =$name['aa'];
                $cdna =$name['cDNA'];
                $ct_title =$name['ct_title'];
                $e_source =$name['e_source'];
                $ens =$name['ens'];
                $gene =$name['gene'];
                $inv_for_same =$name['investigational_for_same'];
                $preclinical_for_same =$name['preclinical_for_same'];
                $preclinical_generic =$name['preclinical_generic'];
                $submited_type =$name['submited_type'];
                $index += 1;
        
                    echo "<tr>";

                    echo "<td>" . $index . "</td>";

                    echo "<td>" . $ens . "</td>";

                    echo "<td>" . $gene . "</td>";

                    echo "<td>" . $fda_for_same . "</td>";

                    echo "<td>" . $fda_for_other . "</td>";

                    echo "<td>" . $aa . "</td>";

                    echo "<td>" . $cdna . "</td>";

                    echo "<td>" . $ct_title . "</td>";

                    echo "<td>" . $e_source . "</td>";

                    echo "<td>" . $inv_for_same . "</td>";

                    echo "<td>" . $preclinical_for_same . "</td>";

                    echo "<td>" . $preclinical_generic . "</td>";

                    echo "<td>" . $submited_type . "</td>";

                    echo "<td><form target='_blank' action='pages/pdfGenerate.php?aa=" . $name['aa'] . "' 
                        method = 'Post'><button type='submit' style='padding: 5px ;margin-left:10px; margin-right:10px;'class='btn btn-sm btn-primary'>
                        <i class='fa fa-file-pdf-o' aria-hidden='true'></i></button></form></td>";

                    echo  "<td><a href=controller/RemoveFavoriteAction.php?aa=".$name['aa']."
                        onclick='javascript:confirmationDelete($(this));return false;' class='btn btn-sm btn-danger' type='button' ><i class='glyphicon glyphicon-trash'></i></a></td>";
                         

                    echo "</tr>";
                    }
                    while($name=mysqli_fetch_array($getdata4)){
                        $fda_for_same =$name['FDA_for_same'];
                        $fda_for_other =$name['FDA_for_other'];
                        $aa =$name['aa'];
                        $cdna =$name['cDNA'];
                        $ct_title =$name['ct_title'];
                        $e_source =$name['e_source'];
                        $ens =$name['ens'];
                        $gene =$name['gene'];
                        $inv_for_same =$name['investigational_for_same'];
                        $preclinical_for_same =$name['preclinical_for_same'];
                        $preclinical_generic =$name['preclinical_generic'];
                        $submited_type =$name['submited_type'];
                        $index += 1;
                
                            echo "<tr>";
        
                            echo "<td>" . $index . "</td>";
        
                            echo "<td>" . $ens . "</td>";
        
                            echo "<td>" . $gene . "</td>";
        
                            echo "<td>" . $fda_for_same . "</td>";
        
                            echo "<td>" . $fda_for_other . "</td>";
        
                            echo "<td>" . $aa . "</td>";
        
                            echo "<td>" . $cdna . "</td>";
        
                            echo "<td>" . $ct_title . "</td>";
        
                            echo "<td>" . $e_source . "</td>";
        
                            echo "<td>" . $inv_for_same . "</td>";
        
                            echo "<td>" . $preclinical_for_same . "</td>";
        
                            echo "<td>" . $preclinical_generic . "</td>";
        
                            echo "<td>" . $submited_type . "</td>";
        
                            echo "<td><form target='_blank' action='pages/pdfGenerate.php?aa=" . $name['aa'] . "' 
                                method = 'Post'><button type='submit' style='padding: 5px ;margin-left:10px; margin-right:10px;'class='btn btn-sm btn-primary'>
                                <i class='fa fa-file-pdf-o' aria-hidden='true'></i></button></form></td>";
        
                            echo  "<td><a href=controller/RemoveFavoriteAction.php?aa=".$name['aa']."
                                onclick='javascript:confirmationDelete($(this));return false;' class='btn btn-sm btn-danger' type='button' ><i class='glyphicon glyphicon-trash'></i></a></td>";    
        
                            echo "</tr>";
        
                            }
                
                    echo "</table>";
                
            }
                    else
                    {
                    $output = '<h2>You Do Not Have Any Favorite Mutation Yet!</h2>';
                    echo $output;
                    }
        
        ?>

                </div>
                <div style="height: 80px"></div>
                <div style="height: 80px"></div>
            </fieldset>
        </div>
    </div>
</div>

</html>