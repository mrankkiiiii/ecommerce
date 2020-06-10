
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Lifestyle Store</a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">

				<?php if (isset($_SESSION['email'])) { ?>
					<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
					<li><a href = "setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
					<li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
				
				<?php } else { ?>
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a  data-toggle="modal" data-target="#exampleModalCenter"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>


<!-- Login Form -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
                <h4 class="modal-title" id="exampleModalLongTitle">LOGIN</h4>
        </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <p class="text-warning">Login to make a purchase</p>
                          <form action="login_script.php" method="POST">
                                <div class="form-group">    
                                    <input type="email" class="form-control"  placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}" required = "true">  
                                </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </form>
                            <div style="color:#FF0000;">
                                <?php echo $error=filter_input(INPUT_GET,'error'); ?>
                            </div>
                    </div>
                </div>      
            <div class="modal-footer" style="text-align: left;"> <p>Don't have an account? <a href="signup.php">Register</a></p> </div>
    </div>
  </div>
</div>