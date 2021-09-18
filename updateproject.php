<?php
include 'header.php';
include 'includes/projectsupdate.inc.php';
?>

<body>

<h1><strong>UPDATE PROJECTS.</strong></h1><br>
<div class="container">

	<?php if (isset($_GET['error'])){ ?>
		
	
	<div class="alert alert-danger" role="alert">
  	<?php echo $_GET['error']; ?>
</div>
	<?php } ?>
	<form action="includes/projectsupdate.inc.php" 
		  method="post">
	  <div class="col-sm-4">
	      </div>
	  <div class="task col-sm-4">
	    <input type="text"
	    	   name = "projectTitle" 
	    	   class="form-control" 
	    value="<?=$row['project_title'] ?>" > <br>

	    <textarea type = "text" 
	    		  name = "projectDesc" 
	    		  class="form-control" 
	    		  value = "<?=$row['project_desc'	] ?>"></textarea><br>
	    
	    <input type="text" 
	    	   name="id" 
	    	   value="<?=$row['id']?>" 
	    	   hidden>

	    <button  type="submit" 
	    		 name="updateProject" 
	    		 class="btn btn-primary">Update</button><br><br>	
	    <p align="center">
	    	<a href="readproject.php" 
	    	   class="link-primary">View</a></p>
	  </div>






	  <div class="col-sm-4 form-check">
	   
	  </div>
	  
	</form>
</div>
</body>