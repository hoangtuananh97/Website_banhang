<?php 
	/**
	* 
	*/
	class controller_logout
	{
		
		function __construct()
		{
			unset($_SESSION['user']);
			header('location: admin.php');
		}
	}
	new controller_logout();
 ?>