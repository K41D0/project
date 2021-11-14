<?php session_start();
	if(!isset($_SESSION['id']))
		header('location:../logout.php');
?>
<head>
	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	  	<!--JQUERY CDN 3.x-->
	  	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	  	<!--SweetAlert-->
	  	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	  	<!-- Style for Login.php-->
	  	<link rel="stylesheet" type="text/css" href="../css/style.css">
	  	<link rel="stylesheet" type="text/css" href="../login_style.css">
	  	<!-- Fontawesome-->
	  	<script src="https://kit.fontawesome.com/242e09c5fd.js" crossorigin="anonymous"></script>
</head>