<?php require ('./include/common.php'); 
   
    if(!isset($_SESSION['email'])){
    header('location: index.php');
    }

    $success_query = "UPDATE users_items SET  status = 'confirmed' where user_id = $_SESSION['id']"; 
    $success_query_result=mysqli_query($con,$success_query) or die($mysqli_error($con));
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

    <?php include ('./include/footer.php') ?>
    
    <div class="container">
        <div class="jumbotron">
            <h1>Your order is confirmed.</h1>
            <p>Thank you for shopping  with us. <a href="products.php"> Click here </a>​ to purchase any other item.</p>
        </div>
    </div>

    <?php include ('./include/footer.php') ?>

    </body>
</html>