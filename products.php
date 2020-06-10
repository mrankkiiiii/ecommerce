<?php require ('./include/common.php'); 


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
   <?php include ('./include/check-if-added.php') ?>

    <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
        </div>
    <div class="container">
        <div class="row text-center">
           <div class="col-md-3 col-sm-6">
                <a href="products.php#cameras" >
                    <div class="thumbnail">
                        <img src="images/2.jpg" alt="1">
                        <div class="caption">
                            <h3>Canon EOS</h3>
                            <p>Price Rs. 36000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div> 
                </a>   
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="products.php#cameras" >
                    <div class="thumbnail">
                        <img src="images/3.jpg" alt="1">
                        <div class="caption">
                            <h3>Nikon DSLR</h3>
                            <p>Price Rs. 40000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div> 
                </a>   
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="products.php#cameras" >
                    <div class="thumbnail">
                        <img src="images/4.jpg" alt="1">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price Rs. 45000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div> 
                </a>   
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="products.php#cameras" >
                    <div class="thumbnail">
                        <img src="images/5.jpg" alt="1">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price Rs. 50000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div> 
                </a>   
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row text-center">
           <div class="col-md-3 col-sm-6">
                <a href="products.php#cameras" >
                    <div class="thumbnail">
                        <img src="images/9.jpg" alt="1">
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price Rs. 13000.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div> 
                </a>   
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="products.php#cameras" >
                    <div class="thumbnail">
                        <img src="images/10.jpg" alt="1">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price Rs. 3000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div> 
                </a>   
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="products.php#cameras" >
                    <div class="thumbnail">
                        <img src="images/11.jpg" alt="1">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price Rs. 8000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div> 
                </a>   
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="products.php#cameras" >
                    <div class="thumbnail">
                        <img src="images/12.jpg" alt="1">
                        <div class="caption">
                            <h3>Faber Luba #111</h3>
                            <p>Price Rs. 18000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div> 
                </a>   
            </div>

        </div>
    </div>



    <div class="container">
        <div class="row text-center">
           <div class="col-md-3 col-sm-6">
                <a href="products.php#cameras" >
                    <div class="thumbnail">
                        <img src="images/6.jpg" alt="1">
                        <div class="caption">
                            <h3>H&W</h3>
                            <p>Price Rs. 800.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div> 
                </a>   
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="products.php#cameras" >
                    <div class="thumbnail">
                        <img src="images/14.jpg" alt="1">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price Rs. 1000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div> 
                </a>   
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="products.php#cameras" >
                    <div class="thumbnail">
                        <img src="images/13.jpg" alt="1">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price Rs. 1500.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div> 
                </a>   
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="products.php#cameras" >
                    <div class="thumbnail">
                        <img src="images/14.jpg" alt="1">
                        <div class="caption">
                            <h3>Jhalsaini</h3>
                            <p>Price Rs. 1300.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div> 
                </a>   
            </div>

        </div>
    </div>

    <?php include ('./include/footer.php') ?>

    </body>
</html>