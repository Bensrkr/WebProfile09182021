<?php
include 'header.php';
include 'includes/update.inc.php';
?>

<body>

<h1><strong>UPDATE TASK.</strong></h1><br>
<div class="container">

	<?php if (isset($_GET['error'])){ ?>
		
	
	<div class="alert alert-danger" 
		 role="alert">
  	<?php echo $_GET['error']; ?>
	</div>
	<?php } ?>
	<form action="includes/update.inc.php" 
		  method="post">
	  <div class="col-sm-4"></div>
	  <div class="task col-sm-4">
	    <input type="text"
	    	   name = "taskName" 
	    	   class="form-control" 
	    	   value="<?=$row['task'] ?>" > <br>
	    
	    <input type="text" 
	    	   name="id" 
	    	   value="<?=$row['id']?>" 
	    	   hidden>

	    <button  type="submit" 
	    		 name="updateTask" 
	    		 class="btn btn-primary">Update</button><br><br>	
	    <p align="center">
	    	<a href="read.php" 
	    	   class="link-primary">View</a></p>
</div>






	  <div class="col-sm-4 form-check">
	   
	  </div>
	  
	</form>
</div>
</body>