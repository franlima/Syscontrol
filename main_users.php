<?php

    require_once('checksession.php');

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lotosystem</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="logout.php">Logout</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top:50px; text-align:center;">
        <!--<div class="jumbotron">-->
            <div class="panel-group" id="accordion" style="text-align:center;">  
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <button class="btn btn-danger btn-lg" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                New TFL action
                            </button>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="panel-body">
                            teaetada para saber qual a cor do collapse
                        </div>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <button class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                View TFL Report
                            </button>
                        </h4>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="panel-body">
                            
                        </div>
                    </div> 
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <button class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Reset your password
                            </button>
                        </h4>
                    </div>
                    <div id="collapseOne"  class="collapse" data-parent="#accordion">
                        <div class="panel-body">
                                <form action="/reset_password.php" method="post">
                                    <div class="form-group">
                                        <input type="password" id="new_password" name="new_password" class="form-control" placeholder="New Password">
                                        <span class="help-block"></span>
                                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Repeat Password">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Reset Password" name="reset">       
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        <!--</div>-->
    </div>

    <?php 
        include_once('modal.php') 
    ?>
    <script src="../syscontrol/css/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>