<?php require ('./include/common.php'); 

if (isset($_SESSION['email'])){
    header('location: products.php');
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
    <title>Sign Up</title>
</head>
<body>
    
    <?php include ('./include/header.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <img src="./images/signup.png" height="490px" width="500px">
            </div>
                <div class=" col-sm-5">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>SIGN UP</h4>
                        </div>
                            <div class="panel-body">
                                <form action="signup_script.php" method="POST">
                                    <div class="form-group">    
                                        <input type="text" class="form-control"  placeholder="Name" name="name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required = "true">
                                    </div>
                                    <div class="form-group">    
                                        <input type="email" class="form-control"  placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}" required = "true">
                                    </div>
                                    <div class="form-group">    
                                        <input type="numeric" class="form-control"  placeholder="Contact" name="contact" pattern=".{10,}" required = "true">
                                    </div>
                                    <div class="form-group">    
                                        <input type="text" class="form-control"  placeholder="City" name="city" required = "true">
                                    </div>
                                    <div class="form-group">    
                                        <input type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                                </form>
                                <div style="color:#FF0000;">
                                    <?php echo $error=filter_input(INPUT_GET,'error'); ?>
                                </div> 
                            </div> 
                        </div> 
                </div>
        </div>
    </div>

   <?php include ('./include/footer.php') ?>
    
</body>
</html>