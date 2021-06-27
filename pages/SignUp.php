<?php

//set validation error flag as false
$error = false;
//check msg errors
// if true show the msg on screen
// for all fields in page
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'success') {
        $successmsg = "Successfully Registered! <a href='index.php?page=login'>Click here to Login</a>";
    }
    if ($_GET['msg'] == 'faild') {
        $errormsg = "Error In Registration...Please Try Again";
    }
    if ($_GET['msg'] == 'faild' && isset($_GET['err'])) {
        $errors = explode(",", $_GET['err']);
        foreach ($errors as $error) {
            if ($error == 'password') {
                $error = true;
                $password_error = "Password must be minimum of 6 characters";
            }
            if ($error == 're_password') {
                $error = true;
                $re_password_error = "Two password mismatch";
            }
        }
    }

}
?>
<!-- page layout -->
<div class="container-fluid" style="background: url('imgs/dna.jpg');width: 100%;height: 100%;">
    <div class="row">
    <div class="col-sm-6" style="margin-top: 15px;padding: 0px 70px; background: lightgray;
            border-radius: 7px; margin: 3% 25%; opacity: 0.9;">
            <br><br>
            <div class="text-center" style="color:#00B4CC;">
                <h2>Join us in MyGene!</h2>
            </div>
            <br><br>
            <?php
        if (!isset($_GET['exits'])) {
            ?>
                <?php
                if (isset($successmsg)) {
                    ?>
                    <div class="alert alert-success text-center">
                        <?= $successmsg ?>

                    </div>
                    <?php
                }
                ?>
                <?php
                if (isset($errormsg)) {
                    ?>
                    <div class="alert alert-danger text-center">
                        <?= $errormsg ?>
                    </div>
                    <?php
                }
                ?>
            <form role="form" action="controller/SignUpAction2.php" method="post" name="signupform"
                style="padding: 0px 40px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <h5>Hospital ID</h5>
                            </label>
                            <input id="hospital_id" type="text" name="hospital_id" required class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <h5>Password</h5>
                            </label>
                            <input type="password" id="password" name="password" required class="form-control" />
                            <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <h5>Repeat Password</h5>
                            </label>
                            <input id="re_password" type="password" name="re_password" required class="form-control" />
                            <span
                                class="text-danger"><?php if (isset($re_password_error)) echo $re_password_error; ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="primary pull-left"><input type="checkbox" name="w" required>
                            I read and agree of <b style="font-weight: bold;
                                  color: #00bbb3;">Terms</b> and <b style="font-weight: bold;
                                  color: #00bbb3;">conditions</b></h5>
                        <span class="text-danger"><?php if (isset($agree_error)) echo $agree_error; ?></span>
                    </div>
                    <div class="col-md-6 text-left">
                        <h5 class="primary">
                            <h5>Already Have An Account? <a href="./index.php?page=Login" class="primary">Sign In</a>
                            </h5>
                        </h5>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group pull-right">
                            <input type="submit" name="signup" value="Sign Up" class="btn btn-primary"
                                style="width: 150px;" />
                        </div>
                    </div>
                </div>

            </form>
            </div>
            <?php
        } else {
            if ($_GET['exits'] == "yes") {
                ?>
                <!-- if signup with out error display this div-->
            <div class="col-md-6 col-md-offset-3 well" style="width: 100%; display: block; margin-left: auto; margin-right: auto;">
                <h1 class="text-center" style="position: absolute; right: 10px;top: 10px; margin: 0px;"></h1>
                    <fieldset>
                        <h1 class="text-center">Accepted <a href="./index.php?page=Login"><span class="fa fa-check"></a></span></h1>
                        <h1 class="text-center">Welcome Now You Are a Member In MyGene Community</h1>
                        <div class="row">
                            <div class="col-md-12 text-center"><h1 class="text-center">
                                    <a class="btn btn-primary" href="./index.php?page=Login" style="width: 150px;">OK</a></h1>
                            </div>
                        </div>
                    </fieldset>
            </div>
                <?php
            } else if ($_GET['exits'] == "no") {
                ?>
                    <!-- if error display this div-->
                <div class="col-md-6 col-md-offset-3 well" style="width: 100%; display: block; margin-left: auto; margin-right: auto;">
                    <h1 class="text-center"
                        style="position: absolute; right: 10px; top: 10px; margin: 0px;"><a href="./index.php?page=SignUp"><span class="fa fa-close"></a></span></h1>
                    <fieldset>
                        <h1 class="text-center">This Hospital ID Is Already Exist Try Another One Please</h1>
                        <div class="row">
                            <div class="col-md-12 text-center"><h1 class="text-center">
                                    <a class="btn btn-primary"
                                       href="./index.php?page=SignUp"
                                       style="width: 150px;">OK</a></h1>
                            </div>
                        </div>

                    </fieldset>
                </div>
                <?php
            } else if ($_GET['exits'] == "null"){
              ?>
              <!-- if error display this div-->
              <div class="col-md-6 col-md-offset-3 well" style="width: 100%; display: block; margin-left: auto; margin-right: auto;">
                    <h1 class="text-center"
                        style="position: absolute; right: 10px; top: 10px; margin: 0px;"><a href="./index.php?page=SignUp"><span class="fa fa-close"></a></span></h1>
                    <fieldset>
                        <h1 class="text-center">This Hospital ID Is Invalid</h1>
                        <div class="row">
                            <div class="col-md-12 text-center"><h1 class="text-center">
                            <a class="btn btn-primary"  href="./index.php?page=SignUp" style="width: 150px;">OK</a></h1>
                            </div>
                        </div>

                    </fieldset>
                </div>
           <?php  }?>
         <?php  }?>
        </div>
    </div>
</div>
