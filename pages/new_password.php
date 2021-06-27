<?php
    include("./Connection.php");
    $id = $_GET['hos2'];
    $random = $_GET['rand'];

    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == 'faild' && isset($_GET['err'])) {
            $errors = explode(",", $_GET['err']);
            foreach ($errors as $error) {
                if ($error == 'new') {
                    $error = true;
                    $new_error = "Two password mismatch";
                }
            }
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyGene</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/script.js"></script>
<style>
    h5 {
        font-size: 18px;
        font-weight: bold;
        color: #21706d;
    }
</style>
</head>
<body>
<!-- set new password container layout-->
<div class="container-fluid" style="background: url('imgs/dna.jpg');width: 100%;height: 100%; margin-top:10%;">
    <div class="row">
        <div class="col-sm-6" style="margin-top: 15px;padding: 0px 70px; background: lightgray;
            border-radius: 7px; margin: 3% 25%; opacity: 0.9;">
            <form role="form" action ="controller/newpassAction.php?random=<?php echo $random?>" method="post">
            
                <h1 class="text-center" style="position: absolute; right: 10px; top: 10px; margin: 0px;"></h1>
                <fieldset>
                    <legend class="text-center primary"><h1>Enter New Password</h1></legend>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><h5>New Password</h5></label>
                                <input type="password" name="new_pass" required class="form-control" />
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><h5>Confirm New Password</h5></label>
                                <input type="password" name="new_pass_c" required class="form-control" />
                                <span class="text-danger"><?php if (isset($new_error)) echo $new_error; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button type="submit" name="new_password" class="btn btn-primary" style="width: 150px;">Change</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>

    