<?php
	$connection = mysqli_connect("localhost","root","","test");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySql: ".mysqli_connect_error();
	}
?>
<head>
	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<div class="container mt-2">
	<div class="content">
		<div class="card">
			<div class="card-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Account</th>
							<th>Email</th>
							<th>Password</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php 
								$view_query = mysqli_query($connection,"SELECT * FROM users");
								while($row = mysqli_fetch_assoc($view_query))
								  		{
								  			$firstname = $row['firstname'];
								  			$lastname = $row['lastname'];
								  			$account = $row['account'];
								  			$email = $row['email'];
								  			$password = $row['password'];

								  			echo"<tr>
											      <td>$firstname</th>
											      <td>$lastname</td>
											      <td>$account</td>
											      <td>$email</td>
											      <td>$password</td>
										    	</tr>";
								  		}
							?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="row" style="display: flex; flex-direction: row;">
		<div class="col-2">
			<button class="btn btn-primary mt-2">Insert data</button>
		</div>
			<div class="col-2">
			<button class="btn btn-warning mt-2">Update data</button>
		</div>
		<div class="col-6">
			<button class="btn btn-danger mt-2">Delete data</button>
		</div>
	</div>
</div>