<?php

    require_once('checksession.php');

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Lotosystem</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            }
    </style>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
            $('#myModal').on('hide.bs.modal', function () {    
                console.log('username : '+$("#modal-username").val());    
                console.log('result : '+$("#modal-result").val());    
            });
            //triggered when modal is about to be shown
            $('#delete').on('show.bs.modal', function(e) {

                //get data-id attribute of the clicked element
                var bookId = $(e.relatedTarget).data('id');
                alert(bookId);

                //populate the textbox
                $(e.currentTarget).find('glyphicon[id="user-data-delete"]').prop('data-id', bookId);
            });
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div>
                <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
            </div>
            <div><!--
                <p><a href="reset_password.php" class="btn btn-warning btn-lg">Reset Your Password</a></p><br>
                <p><a href="logout.php" class="btn btn-danger btn-lg">Sign Out</a></p><br>
                <p><a href="" class="btn btn-primary btn-lg">Adding user</a></p><br>
                <p><a href="" class="btn btn-info btn-lg">Adding operations</a></p><br>-->

                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Reset your password
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <form class="form-signin" method="post">
                                <div class="form-group">
                                    <label for="new_password" class="sr-only">New password</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control" placeholder="New Password">
                                    <span class="help-block"></span>

                                    <label for="confirm_password" class="sr-only">Repeat new password</label>
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Repeat Password">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Reset Password" name="reset">
                                    <!--<a href="" class="btn btn-primary" onclick="document.getElementById('headingOne').setAttribute('data-toggle', 'collapse');"
                                    >Cancel</a>-->         
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-danger btn-lg" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Manager Users 
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <?php 
                                include_once("managerusers.php"); 
                            ?>
                        </div>ss
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Manager operations
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        include_once('modal.php') 
    ?>
</body>
</html>