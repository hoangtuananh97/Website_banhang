<?php 
	/**
	* 
	*/
	class controller_login extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			if($_SERVER["REQUEST_METHOD"] == 'POST')
			{
				$username = $_POST['tendangnhap'];
				$username = $this->encode($username);
				$password = $_POST['matkhau'];
				$password = md5($password);
				$check = $this->model->fetch_one("select * from tbl_user where tendangnhap='$username'");
				if(isset($check->tendangnhap))
				{
					if($password == $check->matkhau)
					{
						$_SESSION['user'] = $username;
						header('location: admin.php');
					}
					else
					{
						header('location: admin.php?success=invalid');
					}
				}
				else
				{
					header('location: admin.php?success=invalid');
				}
			}
			include 'view/backend/view_login.php';
		}
	}
	new controller_login();
 ?>