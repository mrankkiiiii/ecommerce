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
    <title>Lifestyle Store</title>
</head>
<body>

        <?php include ('./include/header.php') ?>

    <div id="banner-image">
        <div class="container">
            <div id="banner-content">
                <h1>Welcome to our Lifestyle Store</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                <a href="products.php" target="_blank" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>

        </div>

    </div>

        <?php include ('./include/footer.php') ?>

    </body>
</html>