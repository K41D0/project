<body>
	<br>
	<div class="card">
	  	<div class="card-body">
	    	<h4>Tasks</h4>
	  	</div>
	  </div>
	  <br>
	  <div class="card">
		<div class="card-body">
			<h5>
				<table class="table table-hover table-condense">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Project name</th>
						      <th scope="col" class="d-grid gap-2 d-md-flex justify-content-md-end">Action</th>
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
									      <td class="d-grid gap-2 d-md-flex justify-content-md-end">
									      	<p class="time-id"><?php $proj_id ?></p>
											<button class="btn btn-success" onclick="clock()">Start counter</button>
											<button class="btn btn-danger" onclick="clearInterval(myTimer)">Stop counter</button>
									      </td>
								    	</tr>
								<?php
							  		}
							  	?>	    
						  </tbody>
						</table>
			</h5>
		</div>	  	
	  </div>
	</div>
	<br>
</body>
<script type="text/javascript">
	var myTimer;
	var timerID = $(this).closest('p').find('time-id').text();
	   	function clock() 
	   	{
	    	myTimer = setInterval(myClock, 1000);
		     	function myClock() 
			    {
			    	clearInterval(myTimer);
			       	$(timerID).innerHTML = ++c;
				}
	   	}
</script>