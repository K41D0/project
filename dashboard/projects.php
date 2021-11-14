<?php 
	include '../modals/addProject_modal.php';
	include'../modals/delete_project_modal.php'; 
?>
<body><br>
	<div class="col-md-12">
		<div class="card">
		  <div class="card-body"style="max-width: 100%;">
		    <h4>Projects</h4>
		  </div>
		</div>
		<br>
		<div class="row">
			<div class="col-12 px-0">
				<div class="card text-dark bg-light mb-3" style="max-width: 100%;">
				  	<div class="card-header">&nbspProject list
				  		<button class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#addProject"><i class="fas fa-plus"></i>&nbspAdd new</button>
				  	</div>
				  	<div class="card-body">
				    	<table class="table table-hover table-condense">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Project name</th>
						      <th scope="col">Date started</th>
						      <th scope="col">Due date</th>
						      <th scope="col" class="d-grid gap-2 d-md-flex justify-content-md-center">Action</th>
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
							  			$proj_start = $row['start_date'];
							  			$proj_end = $row['end_date'];
						  	?>	
						  				<tr>
									      <td class="proj_id"><?php echo $proj_id;?></td>
									      <td><?php echo $proj_name;?></td>
									      <td><?php echo $proj_start;?></td>
									      <td><?php echo $proj_end;?></td>
									      <td class="d-grid gap-2 d-md-flex justify-content-md-center">
									      	<button type="button" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> View</button>
									      	<a href="javascript:void(0)" class="btn btn-sm btn-danger delete_btn"><i class="fas fa-trash"></i> Delete</a>
									      </td>
								    	</tr>
								<?php
							  		}
							  	?>	    
						  </tbody>
						</table>
				  </div>
				</div>
			</div>	
		</div>
	</div>
</body>

<script type="text/javascript">
	$(document).ready(function()
	{
		$('.delete_btn').click(function ()
		{
			var proj_id = $(this).closest('tr').find('.proj_id').text();
			$('#delete_project').modal('show');
			$('#delete_id').val(proj_id);
		});
	});
</script>
