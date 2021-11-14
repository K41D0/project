<?php 
	include'../modals/delete_employee_modal.php';
	include'../modals/view_employee_modal.php';
	include'../modals/edit_employee_modal.php'
?>
<body>
	<br>
	<div class="card">
	  <div class="card-body">
	    <h4>Employees</h5>
	  </div>
	</div>
	<div class="card mt-3">
		<div class="card-body">
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
		<table class="table table-hover table-condense">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Firstname</th>
					<th scope="col">Last name</th>
					<th scope="col">Email</th>
					<th scope="col" class="d-grid gap-2 d-md-flex justify-content-md-center">Actions</th>
				</tr>
				</thead>
			<tbody>
				<?php 
				  	include '../database/connection.php';
				  	$view_query = mysqli_query($connection,"SELECT * FROM users");

				  	while($row = mysqli_fetch_assoc($view_query))
					  	{
					  		$id = $row['id'];
					  		$firstname = $row['firstname'];
					  		$lastname = $row['lastname'];
					  		$email = $row['email'];
					  	?>
						  		<tr>
							      <td class='id'><?php echo $id ?></th>
							      <td class='firstname'><?php echo $firstname ?></td>
							      <td class='lastname'><?php echo $lastname ?></td>
							      <td class='email'><?php echo $email ?></td>
							      <td class='d-grid gap-2 d-md-flex justify-content-md-center'>
								      	<a href="javascript:void(0)" data-id="<?php echo $id; ?>" class='btn btn-sm btn-primary view_btn'><i class='fas fa-eye'></i> View</a>
								      	<a href="javascript:void(0)" class="btn btn-sm btn-success edit_btn"><i class="fas fa-user-edit"></i> Edit</a>
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
	<br>
</body>
<script type="text/javascript">
	$(document).ready(function()
	{
		$('.delete_btn').click(function ()
		{
			var emp_id = $(this).closest('tr').find('.id').text();
			$('#delete_employee').modal('show');
			$('#delete_id').val(emp_id);
		});

		$('.edit_btn').click(function ()
		{console.log(emp_id);
			var emp_id = $(this).closest('tr').find('.id').text();
			$('#edit_employee').modal('show');
			$('#edit_id').val(emp_id);

		});

		$('.view_btn').click(function ()
		{
			var emp_id = $(this).attr('data-id');
			$.ajax
			({
				url:"../modals/employee_details.php",
				method:"POST",
				data:{ id:emp_id},
				success:function(data)
				{
					$("#employe_detail").html(data);
					$("#view_employee").modal('show');
				}

			})
		});
	});
</script>
