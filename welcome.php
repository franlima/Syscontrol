<?php

    require_once('checksession.php');

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div>
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <div>
        <p><a href="reset_password.php" class="btn btn-warning btn-lg">Reset Your Password</a></p><br>
        <p><a href="logout.php" class="btn btn-danger btn-lg">Sign Out</a></p><br>
        <p><a href="" class="btn btn-primary btn-lg">Adding user</a></p><br>
        <p><a href="" class="btn btn-info btn-lg">Adding operatios</a></p><br>
    </div>
</body>
</html>