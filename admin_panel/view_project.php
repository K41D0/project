<?php
	include '../database/connection.php';  
	$id = $_GET['id'];
	$view_query = mysqli_query($connection,"SELECT * FROM project_list WHERE proj_id ='$id'");

	while($row = mysqli_fetch_assoc($view_query))
        {
        	$proj_id = $row['proj_id'];
			$proj_name = $row['proj_name'];
			$proj_desc = $row['proj_description'];
			$proj_start = $row['start_date'];
			$proj_end = $row['end_date'];
		}

?>
<div class="col-lg-16">
	<br>
	<div class="card">
		  <div class="card-body"style="max-width: 100%;">
		    <h4><?php echo $proj_name; ?></h4>
		  </div>
	</div>
	<div class="col-md-12 mt-2">
		<div class="card">
			<div class="col-md-12">
				<div class="row">
					<div class="col-sm-6">
						<div class="col-md-12 px-3 py-2">
							<dl>
								<dt>
									<p>Project manager</p>
								</dt>
							</dl>
							<dl>
								<dt>
									<p>Description</p>
									<dd><?php echo $proj_desc ;?></dd>
								</dt>
							</dl>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="col-md-12 px-3 py-2">
							<dl>
								<dt>
									<p>Started date</p>
									<dd><?php echo $proj_start ?></dd>
								</dt>
							</dl>
							<dl>
								<dt>
									<p>Due date</p>
									<dd><?php echo $proj_end ?></dd>
								</dt>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-md-4">
			<div class="card card-outline card-primary">
				<div class="card-header">
					<span><b>Team member(s)</b></span>
				</div>
				<div class="card-body">
					<ul class="user-list clearfix">

					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<span><b>Task list</b></span>
					<button class="btn btn-success btn-sm float-end"><i class="fas fa-plus"></i>&nbspNew task</button>
				</div>
				<div  class="card-body">
					<table class="table table-hover table-condense">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Task</th>
								<th scope="col">Description</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-2 pb-5">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<span><b>Member(s) Activity/Productivity</b></span>
					<button class="btn btn-success btn-sm float-end"><i class="fas fa-plus"></i>&nbspAdd Productiivity</button>
				</div>
				<div class="card-body">
					<table class="table table-hover table-condense">
						<thead>
							<tr>
								
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>