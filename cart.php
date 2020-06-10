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
    <title>Cart</title>
</head>
<body>

    <?php include './include/header.php'; ?>

    <div class="container">
        <table class="table table-striped">
              <!--show table only if there are items added in the cart-->
                <?php
                $sum = 0;
                $user_id = $_SESSION['id'];
                $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                $result = mysqli_query($con, $query)or die($mysqli_error($con));
                if (mysqli_num_rows($result) >= 1) {
                ?>
            <thead >
                <tr>
                    <th>Item Number</th>
                    <th>Name</th>
                    <th>Item Price</th>
                    <th></th>
                </tr>
            </thead>  
            <tbody>    
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["Price"];
                     echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                    }
                    echo "<tr><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td></tr>";
                 ?>
            </tbody>

            <?php
            } else {
             echo "<center class='jumbotron'style='margin-top: 200px;background-color: rgba(0, 0, 0, 0.7);'><h2 style='color:#ff0000;'>Add items to the cart first!</h1><p>Flat 10% OFF on premium brands</p><a href='products.php' class='btn btn-danger btn-lg active'>Shop Now</a></center>";
                    }
            ?>
            <?php 
            ?>
        </table>
    </div>
    <?php include './include/footer.php'; ?>
    
</body>
</html>