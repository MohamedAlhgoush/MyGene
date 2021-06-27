<?php
include("Connection.php");
$_SESSION['ID'];
$userid=$_SESSION['ID'];

 if(!isset($_SESSION['ID'])){
header("Login.php");}

$query1="select * from users WHERE ID=$userid" ;
$getdata1=mysqli_query($con,$query1) or die(mysqli_error($con));
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
        <script language="JavaScript" type="text/javascript">
        function confirmationDelete(anchor)
        {
        var conf = confirm('Do You Want To Save This Changes ?');
        if(conf)
            window.location=anchor.attr("href");
        }
        </script>

    </head>
    <!--container div-->
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-12 well">
            <fieldset onload="getDataFunction()">
                <form id="edit-profile-form" method="post" id="form" action="controller/EditProfileAction.php">
                    <legend class="text-center">
                        <h1>Profile Information</h1>
                    </legend>

                    <legend class="alert alert-info">
                         Personal Information
                        <span class="pull-right">
                            <button type="submit" class="btn btn-sm btn-success btn-ign" onclick="javascript:confirmationDelete($(this))";return false>
                                <span class="glyphicon glyphicon-save"></span>
                            </button>
                        </span>
                    </legend>

                    <?php
                     while($name=mysqli_fetch_array($getdata1)){
                        ?>
                    <div class="form-group">
                        <label style="font-size: 20px;">
                            <span class="glyphicon gg glyphicon-user"></span>
                            <span class="left">Full Name: </span>
                            <input type="text" name="name" id="name" value="<?php echo $name['FullName']; ?>" />
                        </label>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 20px;width:150%; ">
                            <span class="fa gg fa-pencil"></span>
                            <span class="left">Department:</span>
                            <input type="text" name="department" id="department" style="width:30%;"
                                value="<?php echo $name['Department']; ?>"/>
                        </label>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 20px;width:150%;">
                            <span class="glyphicon gg glyphicon-envelope"></span>
                            <span class="left">Email:</span>
                            <input type="text" name="email" id="email" value="<?php echo $name['Email']; ?>" style="width:30%;"/>
                        </label>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 20px;">
                            <span class="gg fa fa-users"></span>
                            <span class="left">Hospital ID:</span>
                            <span style="margin-left: 50px;color: gray;"><?php echo $name['hospital_id']?> </span>
                        </label>
                    </div>
                    <?php }?>

                    <div style="height: 80px"></div>
            </fieldset>
        </div>
    </div>
</div>
</html>