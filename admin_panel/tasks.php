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
							<th scope="col">Task name</th>
							<th scope="col" class="d-grid gap-2 d-md-flex justify-content-md-end">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include '../database/connection.php';
						$view_query = mysqli_query($connection, "SELECT * FROM task_list");

						while ($row = mysqli_fetch_assoc($view_query)) {
							$task_id = $row['task_id'];
							$task = $row['task'];
							$desc = $row['description'];
							$task_start_time = $row['task_start_time'];
							$task_stop_time = $row['task_end_time'];
						?>
							<tr>
								<td class="proj_id"><?php echo $task_id; ?></td>
								<td><?php echo $task; ?></td>
								<td class="d-grid gap-2 d-md-flex justify-content-md-end">
									<p class="time-id"><?php $task_id ?></p>
									<?php if(!$task_start_time): ?>
										<button class="btn btn-success" onclick="clock(<?= $task_id ?>, 'set_time')">Start counter</button>
									<?php else: ?>
										<span id="time-start-<?= $task_id ?>"><?= $task_start_time ?></span>
									<?php endif; ?>

									<?php if(!$task_stop_time): ?>
										<button class="btn btn-danger" onclick="clock(<?= $task_id ?>, 'stop_time')">Stop counter</button>
									<?php else: ?>
										<span id="time-stop-<?= $task_id ?>"><?= $task_stop_time ?></span>
									<?php endif; ?>

									
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
	var startTime = null;
	var timerID = $(this).closest('p').find('time-id').text();

	function clock(id, method) {
		const xhr = new XMLHttpRequest();

		xhr.open('POST', '/admin_panel/TaskTimer/timer.php');

		let params = {
			target: method,
			id: id
		};

		// set `Content-Type` header
		xhr.setRequestHeader('Content-Type', 'application/json');

		// set response format
		xhr.responseType = 'json';

		xhr.send(JSON.stringify(params));

		xhr.onload = () => {
			// get JSON response
			const rs = xhr.response;
			if(rs.success) 
			{
				location.reload();
			}
		}
	}

	window.onload = function () {
	}
</script>