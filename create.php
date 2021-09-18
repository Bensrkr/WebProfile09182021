<?php
include 'header.php';

?>

<body>

<h1><strong>CREATE A TASK.</strong></h1><br>
<div class="container">

	<?php if (isset($_GET['error'])){ ?>
		<div class="alert alert-danger" 
			 role="alert">
  	<?php echo $_GET['error']; ?>
</div>
	<?php } ?>
	<form action="includes/crud.inc.php" 
		  method="post">
	  <div class="col-sm-4"></div>
	  <div class="task col-sm-4">
	    <input type="text" 
	    	   name = "taskName" 
	    	   class="form-control" 
	    	   value="<?php 
				    if (isset($_GET['taskName']))
				    echo $_GET['taskName']; ?>";
			   placeholder="Your task" ><br>

	    <button type="submit" 
	    		name="addTask" 
	    		class="btn btn-primary">Add task</button><br><br>	
	    
	    <p align="center">
	    	<a href="read.php" 
	    	   class="link-primary">View</a></p>
	  </div>






	  <div class="col-sm-4 form-check">
	   
	  </div>
	  
	</form>
</div>
</body>