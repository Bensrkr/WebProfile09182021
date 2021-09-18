<?php
include 'header.php';

?>

<body>

<h1><strong>PROJECTS!</strong></h1><br>
<div class="container">

	<?php if (isset($_GET['error'])){ ?>
		
	
	<div class="alert alert-danger"
		 role="alert">
  	<?php echo $_GET['error']; ?>
</div>
	<?php } ?>
	<form action="includes/projects.inc.php"
		  method="post">
	  
	  <div class="col-sm-4"></div>
	  <div class="projects col-sm-4">
	    <input type="text" 
	    	   name = "projectTitle" 
	    	   class="form-control" 
	    	   value="<?php 
	    if (isset($_GET['projectTitle']))
	    echo ($_GET['projectTitle']); ?>";
	    	   placeholder="Title" ><br>


	    <textarea type="text" 
	    	   name = "projectDesc" 
	    	   class="form-control" 
	    	   value="<?php 
	    if (isset($_GET['projectDesc']))
	    echo ($_GET['projectDesc']); ?>";
	    	   placeholder="Description" ></textarea><br>
	    
	    <button  type="submit" 
	    		 name="addProject" 
	    		 class="btn btn-primary">Save</button><br><br>	
	    <p align="center">
	    	<a href="readproject.php" 
	    	   class="link-primary">View</a></p>
	  </div>






	  <div class="col-sm-4 form-check">
	   
	  </div>
	  
	</form>
</div>
</body>