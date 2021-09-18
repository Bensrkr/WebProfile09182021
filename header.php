<?php

	session_start();
?>

<!DOCTYPE html>
<html lang="en"><!-- -->
<head>
	<meta charset="utf-8">
	<meta name = "viewport" 
		  content="width=device-width, initial-scale=1"><!-- t0 be responseive in any devices -->
	<title></title>

<link rel="stylesheet" 
	  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	  integrity=">sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
	  crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.1.1.min.js" 
		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" 
		crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
		crossorigin="anonymous"></script>

	<link rel="stylesheet" 
		  type="text/css" 
		  href="index.css?v=<?php echo time(); ?>">
</head>

<body>


	<nav class="navbar navbar-inverse">	
			<div class = "container-fluid">
					<div class="navbar-header">	
						<button type="button" 
								class="navbar-toggle" 
								data-toggle = "collapse"
								data-target = "#menu"> 
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" 
						   href="index.php"><strong>BEN</strong></a>
					</div> 
	<div class="loginbox">

	<?php
		if (isset($_SESSION['userId'])) {
			echo '<form action="includes/logout.inc.php" method="post">
			<ul class="nav navbar-nav navbar-left">
			<button type="submit" 
					class = "logout-btn" 
					name="logout-submit" 
					class="btn btn-primary btn-block">Logout</button></form>

			</ul>
			<div class="collapse navbar-collapse" id="menu" >								
				<ul class="nav navbar-nav navbar-right">
				<li class="	active"><a href="about.php">ABOUT</a></li>
				<li class="	active"><a href="projects.php">PROJECTS</a></li>
				<li class="	active"><a href="contact.php">CONTACT</a></li>
				<li class="	active"><a href="create.php">TODO LIST</a></li>
				
			</div>';//if logged in
		}
		else {
			echo '<form action="includes/login.inc.php" 
						method="post">
				  <ul class="nav navbar-nav navbar-left">
					<li><input type="text" 
							   name="mailuid" 
							   placeholder="Username/E-mail"></li>
					<li><input type="password" 
							   name="pwd" 
							   placeholder="Password"></li>
					<li><button type="submit" 
								name="login-submit" 
								class="btn btn-primary btn-block">Login</button></li>			
	
				  </form></ul>

				<div class="collapse navbar-collapse" 
					 id="menu" >								
				<ul class="nav navbar-nav navbar-right">
				<li class="active">
				<a href="signup.php">SIGNUP</a></li>
				</div>';	// if logged out
		}
	?>
		
	</div>
				</ul>
	</div>		
	</div>
			
	</nav>	
	</html>