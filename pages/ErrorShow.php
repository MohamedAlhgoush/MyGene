<!-- To show Errors daialog  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container-fluid" style="background: url('imgs/dna.jpg');width: 100%;height: 100%;">
    <div class="row">
        <!-- This Php Code To confirm the error type via url / yes to agree message  -->
<?php   
    if (isset($_GET['exits']) == "yes") {
        ?>
   
    <div class="col-md-6 col-md-offset-3 well" style="width: 60%; display: block; margin-left: 20%; margin-right: auto; margin-top:3%;">                
        <h1 class="text-center" style="position: absolute; right: 10px;top: 10px; margin: 0px;"></h1>
            <fieldset>
                <h1 class="text-center">Accepted <a href="./index.php?page=Login"><span class="fa fa-check"></a></span></h1>
                <h1 class="text-center">Password changed successfully</h1>
                <div class="row">
                    <div class="col-md-12 text-center"><h1 class="text-center">
                            <a class="btn btn-primary" href="./index.php?page=Login" style="width: 150px;">OK</a></h1>
                    </div>
                </div>
            </fieldset>
    </div>
<!-- This Php Code To confirm the error type via url / no to reject message  -->    
<?php  
    }else if ($_GET['exits'] == "no") {
        ?>
   
    <div class="col-md-6 col-md-offset-3 well" style="width: 60%; display: block; margin-left: 20%; margin-right: auto; margin-top:3%;">                
        <h1 class="text-center" style="position: absolute; right: 10px;top: 10px; margin: 0px;"></h1>
            <fieldset>
                <h1 class="text-center"> <a href="./index.php?page=SignUp"><span class="fa fa-close"></a></span></h1>
                <h1 class="text-center">You Are Not A Member In MyGene Community Please Register First </h1>
                <div class="row">
                    <div class="col-md-12 text-center"><h1 class="text-center">
                            <a class="btn btn-primary" href="./index.php?page=SignUp" style="width: 150px;">OK</a></h1>
                    </div>
                </div>
            </fieldset>
    </div>

<?php
}?>
    </div>
    </div>
</body>
</html>
