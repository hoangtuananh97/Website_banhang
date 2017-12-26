<!DOCTYPE html>
<html>
<head>
	<title>Webshop</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		session_start();
		include 'config.php';
		include 'application/model.php';
		include 'application/controller.php';
		if(isset($_SESSION['user']) == false)
		{
			include 'controller/backend/controller_login.php';
		}
		else
		{
			$controller = isset($_GET['controller']) ? $_GET['controller']:'';
			$controller = "controller_$controller.php";
			include 'view/backend/view_layout.php';
		}
	 ?>

</body>
</html>