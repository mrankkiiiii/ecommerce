<?php require ('./include/common.php'); 

     if(!isset($_SESSION['email'])){
        header('location: index.php');
    }

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Setting</title>
</head>
<body>
    <?php include ('./include/header.php') ?>

    <div class="container">
        <div class="row">
            <div class=" col-xs-offset-3 col-xs-7">
                        <h4>Change Password</h4>
                        <form action="setting_script.php" method="POST">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old Password" name="oldpassword" pattern=".{6,}" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password" name="new" pattern=".{6,}" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type New Password" name="new1" pattern=".{6,}" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Change</button>
                        </form>
                        <div style="color:#FF0000;">
                            <?php echo $error=filter_input(INPUT_GET,'error'); ?>
                        </div>
            </div>
        </div>
    </div>

    <?php include ('./include/footer.php') ?>
    
</body>
</html>