<!DOCTYPE html>
<html>
<head>
	<title>Giày Đẹp</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		include 'config2.php';
		include 'application/model.php';
		include 'application/controller.php';
		$controller = isset($_GET['controller'])?$_GET['controller']:'';
		if($controller != '')
		{
			$controller = "controller_$controller.php";
		}
		else
		{
			$controller = "controller_home.php";
		}
		include 'view/fontend/view_layout.php';
	 ?>

</body>
</html>