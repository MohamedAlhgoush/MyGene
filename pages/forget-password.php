<!-- Forget Password Page Withe Filling Data Form -->
<html>
<style>
h5 {
    font-size: 18px;
    font-weight: bold;
    color: #21706d;
}
</style>
<div class="container-fluid" style="background: url('imgs/dna.jpg');width: 100%;height: 100%;">
<!-- This Php Code Check If The Exit Word Send via Url To Check For the Error   -->
    <?php
    if (!isset($_GET['exits'])) {
        ?>
    <div class="row">
        <div class="col-sm-6" style="margin-top: 15px;padding: 0px 70px; background: lightgray;
            border-radius: 7px; margin: 3% 25%; opacity: 0.9;">
            <form role="form" action="controller/sendMail.php" method="post" name="reset-password"
                style="padding: 0px 40px;">
                <fieldset>
                    <legend class="text-center primary">
                        <h1>Enter your hostpital ID to get new password on
                            email</h1>
                    </legend>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="./imgs/login.png" style="width: 100px;">
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">
                                    <h5>Hospital ID</h5>
                                </label>
                                <input type="text" name="hospital_id" required class="form-control" />
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="form-group">
                                <input type="submit" name="reset-password" value="Reset" class="btn btn-primary"
                                    style="width: 150px;" />
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <?php
    } else {
        if ($_GET['exits'] == "null") { //< This Php Line To confirm the error type via url / null it check if this ID is exists in the database and if it is valid  -->
            ?>
    <div class="col-md-6 col-md-offset-3 well" style="width: 50%; display: block; margin-left: 25%; margin-right: auto;margin-top:7%;">
        <h1 class="text-center" style="position: absolute; right: 10px; top: 10px; margin: 0px;">
        <a href="./index.php?page=forget-password"><span class="fa fa-close"></a></span></h1>
        <fieldset>
            <h1 class="text-center">This Hospital ID Is Invalid</h1>
            <div class="row">
                <div class="col-md-12 text-center"><h1 class="text-center">                                   
                <a class="btn btn-primary"  href="./index.php?page=forget-password" style="width: 150px;">OK</a></h1>                                     
                </div>
                </div>
        </fieldset>
    </div> 
    <?php
    } else { //< This Php Line To confirm the error type via url / if not yes and not null it will be no
            //and it will check if this ID is exists in the database and if it is valid  -->
            ?>
    <div class="col-md-6 col-md-offset-3 well" style="margin-top: 7%;">

        <h1 class="text-center" style="position: absolute;
    right: 10px;
    top: 10px;
    margin: 0px;"><span class="fa fa-close"></span></h1>
        <fieldset>
            <h1 class="text-center">Account Not Found!<br />
                You are not member in<br /> MyGene Community!
            </h1>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="text-center">
                        <a class="btn btn-primary" href="./index.php?page=login" style="width: 150px;">OK</a>
                    </h1>
                </div>
            </div>

        </fieldset>
    </div>
    <?php
        }
    }
    ?>
</div>
</html>