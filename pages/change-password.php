<?php

//set validation error flag as false
$error = false;
// error function
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'success') {
        $successmsg = "Successfully Changed! <a href='./index.php?page=profile'>Click here to go Profile</a>";
    }
    if ($_GET['msg'] == 'faild') {
        $errormsg = "Error in changing...Please try again later!";
    }
    if ($_GET['msg'] == 'faild' && isset($_GET['err'])) {
        $errors = explode(",", $_GET['err']);
        foreach ($errors as $error) {
            if ($error == 'old_password') {
                $error = true;
                $old_password_error = "Password Incorect";
            }
        }
    }
}
?>

    <div class="container-fluid" style="background: url('imgs/dna.jpg');width: 100%;height: 100%;">
        <div class="row">
        <?php
        if (!isset($_GET['exits'])) {
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
                <!--page layouts div-->
            <div class="col-sm-6" style="margin-top: 15px;padding: 0px 70px; background: lightgray;
            border-radius: 7px; margin: 3% 25%; opacity: 0.9;">
                <form role="form" action="controller/Change-Password-Action.php" method="post" name="ChangePassworf">
                    <h1 class="text-center" style="position: absolute; right: 10px; top: 10px; margin: 0px;"></h1>
                    <fieldset>
                        <legend class="text-center primary">
                            <h1>Change Passowrd!</h1>
                        </legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        <h5>Old Password</h5>
                                    </label>
                                    <input type="password" name="old_password" required class="form-control" />
                                    <span
                                        class="text-danger"><?php if (isset($old_password_error)) echo $old_password_error; ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        <h5>New Password</h5>
                                    </label>
                                    <input type="password" name="new_password" required class="form-control" />
                                    <span
                                        class="text-danger"><?php if (isset($new_password_error)) echo $new_password_error; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <input type="submit" name="signup" value="Change" class="btn btn-primary"
                                        style="width: 150px;" />
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <?php
        } else {
            if ($_GET['exits'] == "yes") {
                ?>
                <!--confirmation div-->
            <div class="col-md-6 col-md-offset-3 well " style="margin-top: 7%;">
                <h1 class="text-center" style="position: absolute; right: 10px; top: 10px;margin: 0px;"></h1>
                <fieldset>
                    <h1 class="text-center">Password Changed<a href="./index.php?page=profile"> <span class="fa fa-check"></span></h1>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="text-center">
                                <a class="btn btn-primary" href="./index.php?page=profile" style="width: 150px;">OK</a>
                            </h1>
                        </div>
                    </div>
                </fieldset>
            </div>
            <?php
            } else if ($_GET['exits'] == "no")  {
                ?>
                <!--Error div-->
            <div class="col-md-6 col-md-offset-3 well" style="margin-top: 7%;">
                <h1 class="text-center" style="position: absolute;right: 10px;top: 10px; margin: 0px;"><a href="./index.php?page=change-password"><span class="fa fa-close"></a></span></h1>
                <fieldset>
                    <h1 class="text-center">Can't Change your password!<br />your old password not correct</h1>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="text-center">
                                <a class="btn btn-primary" href="./index.php?page=change-password" style="width: 150px;">OK</a>
                            </h1>
                        </div>
                    </div>
                </fieldset>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </div>
