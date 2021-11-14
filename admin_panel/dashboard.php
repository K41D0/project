<body><br>
	<div class="col-md-12">
		<div class="card">
		  <div class="card-body"style="max-width: 100%;">
		    <h5>Welcome <?php echo $_SESSION['name']; ?> !<h5>
		    	<?php if(isset($_SESSION['status']))
				{ ?> 
				  	<script>
						swal({
								title: "",
								text: "<?php echo $_SESSION['status']; unset($_SESSION['status']); ?>",
								icon: "<?php echo $_SESSION['icon'] ?>",
								timer: 1500,
								buttons:false,
								});
					</script>						        
			<?php }?>
		  </div>
		</div>
		<br>
		<div class="row">
			<div class="col-8">
				<div class="card text-dark bg-light mb-3" style="max-width: 100%;">
				  <div class="card-header">Projects</div>
				  <div class="card-body">
				    	<table class="table table-hover table-condense">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Project name</th>
						      <th scope="col">Status</th>
						      <th scope="col">Progress</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php 
						  	include '../database/connection.php';
						  		$view_query = mysqli_query($connection,"SELECT * FROM project_list");

						  		while($row = mysqli_fetch_assoc($view_query))
						  		{
						  			$proj_id = $row['proj_id'];
						  			$proj_name = $row['proj_name'];

						  			echo"<tr>
									      <td>$proj_id</th>
									      <td>$proj_name</td>
									      <td></td>
									      <td></td>
								    	</tr>";
						  		}
						  	?>	
						  </tbody>
						</table>
				  </div>
				</div>
			</div>	
			<div class="col-4">
				<div class="row mx-0">
					<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
					  <div class="card-body">
					    <h3 class="card-title">3</h3>
					    <p class="card-text">Total projects</p>
					  </div>
					  <div class="icon">
					  	<i class="fas fa-layer-group"></i>
					  </div>
					</div>
					<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
					  <div class="card-body">
					    <h3 class="card-title">5</h3>
					    <p class="card-text">Total tasks</p>
					  </div>
					  <div class="icon">
					  	<i class="fas fa-tasks"></i>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>