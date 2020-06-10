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
	<?php include './include/header.php'; ?>
	<div class="container">
			  <div class="row">
			    <div class="col-sm-10">
				    <h2> LIVE SUPPORT </h2>
				    <h3>24 hours | 7 days a week | 365 days a year Live Technical Support</h3>
				    <p class="text-justify"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			    </div>
			    <div class="col-sm-2" >
			    	<img src="./images/contact.jpg" height="220px" width="350px" alt="contact us">
			    </div>
			  </div>
			  <div class="row">
			    <div class="col-sm-8">
				    <h1> CONTACT US </h1>
				    <div class="panel-body">
                          <form action="contactus_script.php" method="POST">
                                <div class="form-group"> 
                                <label for="name">Name</label>  
                                    <input id="name" type="text" class="form-control"  placeholder="Your Name" name="name" required = "true">
                                </div>
                                <div class="form-group">
                                	<label for="email">Email:</label>  
                                    <input id="email" type="email" class="form-control" placeholder="examle@mail.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">  
                                </div>
                                <div class="form-group"> 
                                <label for="message">Message:</label> 
                                <textarea id="message" class="form-control" name="message" required = "true">
                                </textarea>
                                </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
			    </div>
			    <div class="col-sm-4" >
			    	<h2> Company Information : </h2>
			    	<p>500 Loeum Ipum Dolor Sit,</p>
			    	<p>22-56-2-9 Sit Amet, Lorem,</p>
			    	<p>USA</p>
			    	<p>Phone: (00) 222 666 444</p>
			    	<p>Fax: (000) 000 00 00 0</p>
			    	<p>Email: info@mycompany.com</p>
			    	<p>Follow on: Facebook, Twitter</p>
			    </div>
			  </div>
		</div>
			<?php include './include/footer.php'; ?>
	</body>
</html>