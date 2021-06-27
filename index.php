<?php
session_start();

// Define the root folder and base URL for the application
function baseURL()
{
    return sprintf(
        "%s://%s%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['SERVER_NAME'], dirname($_SERVER['REQUEST_URI'])
    );
}

define('BASE_URL', baseURL());
define('MC_ROOT', dirname(__FILE__));

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (isset($_SESSION['ID'])) {
    if (
        $page == 'Login' ||
        $page == 'SignUp' ||
        $page == 'forget-password'||
        $page == 'new_password'||
        $page == 'ErrorShow'
    ) {
        $page = 'profile'||
        $page == 'Edit_Profile';
        
    }
} else {
    if (
        $page == 'profile' ||
        $page == 'change-password' ||
        $page == 'Logout'
    ) {
        $page = 'Login'||
        $page = 'Upload'||
        $page == 'Edit_Upload';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyGene</title>
    <!--style sheet and cdn for bootstrap-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    
    <script src="js/script.js"></script>
</head>
<body>
<!-- page parts -->
<?php require MC_ROOT . '/parts/top-nav.php'; ?>
<?php require_once MC_ROOT . '/pages/' . $page . '.php'; ?>
<?php require MC_ROOT . '/parts/footer.php'; ?>
</body>
</html>
