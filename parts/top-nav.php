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
  </head>
  <body>
      <div>
          <nav class="navbar navbar-default fixed" style="background: white;height: 82px;border-bottom: 2px solid #21706d;">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="./index.php?page=home"><img src="imgs/logo.png" class="logo"></a>
                  </div>
                  <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav">
                          <ul class="nav navbar-nav navbar-right" style="margin-top: 17px;font-size: 18px;font-weight: bold;">
                              <li><a href="./index.php?page=home"><span class="fa fa-home"></span>Home</a></li>
                          </ul>
                      </ul>
                      <ul class="nav navbar-nav" style="float: none;">
                        <ul class="nav navbar-nav navbar-right" style="margin-top: 17px;font-size: 18px;font-weight: bold;float:right;">
                  <?php
                    if (isset($_SESSION['ID'])) {
                        ?>
                          <li><a href="./index.php?page=profile"><span class="glyphicon glyphicon-user"></span>
                          <?php echo "Welcome ".$_SESSION['Name']?> </a></li>
                          <li><a href="./index.php?page=Logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                          <?php
                      }
                      else {
                        ?>
                        <li><a href="./index.php?page=SignUp"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                        <li><a href="./index.php?page=Login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                          }
                          ?>
                    </ul>
                  </ul>
                  </div>
              </div>
          </nav>
        </div>
  </body>
</html>
