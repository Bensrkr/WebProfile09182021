<?php
include 'header.php';
include 'includes/read.inc.php';
?>

<body>

<h1><strong>VIEW TASK.</strong></h1><br>

<?php if (isset($_GET['success'])){ ?>
	<div class="alert alert-success" 
		 role="alert">
  	<?php echo $_GET['success']; ?>
  </div>
<?php } ?>
<div class="container-fluid" 
	 align="center">
	<div class="link-right">
		<a href="create.php" 
		   class="link-primary">Create</a>
	</div><br>

	<div class="box">	
		<table class="table">
			<?php 
				if ( ($result)) { ?>
	  		<thead>
	   			<tr>
      
      		<th scope="col">Your tasks</th>
      		<th scope="col">Action</th>
   				</tr>
	  		</thead>
	  		<tbody>
	  		<?php
	  			while ($rows = mysqli_fetch_assoc($result)){?> 
	  			
	    		<tr>
	   		 		<td><?=$rows['task']?></td>
	   		 		<td><a href="update.php?id=<?=$rows['id']?>" 
	   		 			   class="btn btn-success">Update</a></td>
	   		 		<td><a href="includes/delete.inc.php?id=<?=$rows['id']?>" 
	   		 			   class="btn btn-danger">Delete</a></td>
	    		</tr>
	    	<?php }?>
	  		</tbody>
		</table><br>
	 <?php 	} ?>
		
	</div>
</div>

	
</div>
</body>