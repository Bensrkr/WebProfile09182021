<?php 

	include_once 'header.php'

?>
<body>
	
<h1><strong>LET'S TALK.</strong></h1><br>	
<p><h5>Get in touch via the form below, or by emailing 
<a href="melvincabanes25@gmail.com">melvincabanes25@gmail.com</a></h5></p><br><br>

<article class="contact-form">
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<form class="form-group" action="contactform.php" method="post" >
					
						<label for="name">Enter your name:</label>
						<input class="form-control" 
							   placeholder="Full name" 
							   type="text" 
							   name="name"><br>
					
						<label for="email">Email:</label>
						<input class="form-control" 
							   placeholder="example@gmail.com" 
							   type="text" 
							   name="email"><br>
					
						<label for="Mesage">Enter your message</label>
						<textarea class="form-control" 
								  placeholder="Write message"></textarea><br>	
						<button type="submit" 
								name="submit" 
								class="btn btn-primary btn-block">Submit</button>
				</form>
			
			<div class="col-sm-3"></div>

		</div>

	</div>
</article>



</body>