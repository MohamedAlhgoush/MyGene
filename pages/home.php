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
<!-- home container layout-->
    <div class="container-fluid" style="background: url('imgs/dna.jpg');width: 100%;height: 100%;">
        <br>
        <h1 class="white text-center">SOMATIC VARIANTS CLASSIFIER FOR CANCERS</h1>
        <br><br><br><br>
        <div class="jumbotron con" style="max-width:800px;margin:auto;margin-bottom:6%;">
            <form method="post" action="./index.php?page=Search">
                <div class="row">
                    <div class="search">
                        <button type="submit" class="searchButton1" disabled><i class="fa fa-search"></i></button>
                        <input type="text" id="myInput" name="quary" class="searchTerm" placeholder="What are you looking for?">
                        <button onclick="myFunction3" type="submit" id="myBtn" name="submit" class="searchButton">Search</button>
                    </div>
                </div>
            </form>
            <br>
            <div class="row upload-btn-wrapper">
                <?php
            if (isset($_SESSION['ID'])) {
                ?>
                <button onclick=myFunction() class="btn"
                    style="border: 1px solid #298c8c;background: #ffff;text-align: center;color: #298c8c;cursor: pointer;font-size: 20px;">
                    Upload New Mutation</button>
                <?php
          }
          else {
            ?>
                <button class="btn"
                    style="border: 1px solid #298c8c;background: #ffff;text-align: center;color: #298c8c;cursor: pointer;font-size: 20px;"
                    data-toggle="modal" data-target="#loginModal">Upload New Mutation</button>
                <?php
            }
            ?>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <h1 class="blue text-center">Welcome To MyGene</h1><br><br>
        <p class="text-center text-size">MyGene Website for Somatic Varaints Classifier for Cancer was Founded in 2020
            with the mission of giving the right information in less time</p>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="width: 350px; margin: auto;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <h4>You Must Login / SignUp To Do This</h4>
                    <h4>
                        <a style="background:#298c8c; color: #fff; font-size: 20px;" href="./index.php?page=Login" class="btn  btn-block">Login</a>
                    </h4>
                    <h4>Or</h4>
                    <h4><a style="background:#298c8c; color: #fff; font-size: 20px;" href="./index.php?page=SignUp" class="btn  btn-block">Sign up</a></h4>

                </div>

            </div>

        </div>
    </div>
    <script>
    // if loging in move to upload page
    function myFunction() {
        window.location.href = "./index.php?page=Upload ";
    }
    // if not loging in move to login page
    function myFunction2() {
        window.location.href = "./index.php?page=Login ";
    }
    // move to seaarch page
    function myFunction3() {
        window.location.href = "./index.php?page=Search ";
    }
    </script>
    <script>
        var input = document.getElementById("myInput");
        input.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("myBtn").click();
        }
        });
    </script>
</body>

</html>