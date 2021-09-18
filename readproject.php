<?php
include 'header.php';
include 'includes/readproject.inc.php';
?>

<body>

<h1><strong>VIEW PROJECTS.</strong></h1><br>

<?php if (isset($_GET['success'])){ ?>
	<div class="alert alert-success" role="alert">
  		<?php echo $_GET['success']; ?>
  	</div>
		<?php } ?>
<div class="container-fluid" 
	 align="center">
	<div  class="link-right">
		<a href="projects.php" 
		   class="link-primary">Create</a>
	</div><br>
	
	<div class="box">	
		<table class="table">
			<?php 
				if (mysqli_num_rows($result)) { ?>
	  		<thead>
	   			<tr>
      		<th scope="col">Project Title</th>
      		<th scope="col">Project Description</th>
      		<th scope="col">Action</th>
   				</tr>
	  		</thead>
	  		<tbody>
	  		<?php
	  		while ($rows = mysqli_fetch_assoc($result)){

	  			?> 
	  			
	    		<tr>
	   		 		<td><?=$rows['project_title']?></td>
	   		 		<td><?=$rows['project_desc']?></td>
	   		 		<td>
	   		 			<a href="updateproject.php?id=<?=$rows['id']?>" 
	   		 			   class="btn btn-success">Update</a></td>
	   		 		<td><a href="includes/deleteproject.inc.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</a></td>
	    		</tr>
	    	<?php }?>
	  		</tbody>
		</table><br>
	 <?php 	} ?>
		
	</div>
</div>

	
</div>
</body>