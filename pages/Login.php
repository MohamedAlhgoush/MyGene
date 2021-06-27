<?php
$error = false;
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'success') {
        $successmsg = "Successfully Loggedin! <a href='index.php?page=Login'></a>";
    }
    if ($_GET['msg'] == 'faild') {
        $errormsg = "Error in log in ...Please try again!";
    }
}
?>
<!-- login container layout-->
<div class="container-fluid" style="background: url('imgs/dna.jpg');width: 100%;height: 100%;">
    <div class="row">
        <div class="col-sm-6" style="margin-top: 15px;padding: 0px 70px; background: lightgray;
            border-radius: 7px; margin: 3% 25%; opacity: 0.9;">
            <br><br>
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
            <div class="text-center" style="color:#00B4CC;">
                <h2>Welcome Back Doctor</h2>
            </div>
            <br><br>
            <form role="form" action="controller/LoginAction.php" method="post" name="signupform"
                style="padding: 0px 40px;">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group">
                            <label>
                                <h5>Hospital ID</h5>
                            </label>
                            <input id="hospital_id" type="text" name="hospital_id" required class="form-control" />
                            <span
                                class="text-danger"><?php if (isset($hospital_id_error)) echo $hospital_id_error; ?></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group pass-show">
                            <label>
                                <h5>Password</h5>
                            </label>
                            <input id="password" type="password" name="password" required class="form-control" />
                            <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 pull-right">
                        <h5 class="primary">
                            <a href="./index.php?page=forget-password">
                                <h5 class=" text-right">Forget Password?</h5>
                            </a>
                        </h5>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h5 class="primary">
                            <h5>New User? <a href="./index.php?page=SignUp" class="primary">Sign up</a></h5>
                        </h5>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="form-group">
                            <form class="Contact" method="post" id="form" action="action.php">
                                <input type="submit" name="login" value="Login" class="btn btn-primary"
                                    style="width: 150px;" />
                            </form>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
