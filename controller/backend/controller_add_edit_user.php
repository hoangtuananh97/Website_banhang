<?php 
	/**
	* 
	*/
	class controller_add_edit_user extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$action = isset($_GET['action'])?$_GET['action']:'';
			$action = $this->encode($action);
			switch($action)
			{
				case 'edit':
					$this->getdata_user();
				break;
				case 'do_edit':
					$this->do_edit();
				break;
				case 'add':
					$this->getdata_add_user();
				break;
				case 'do_add':
					$this->do_add();
				break;
			}
		}
		private function getdata_user()
		{
			$id = isset($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:0;
			$user = $this->model->fetch_one("select * from tbl_user where pk_user_id=$id");
			$form_action = "admin.php?controller=add_edit_user&action=do_edit&id=$id";
			include 'view/backend/view_add_edit_user.php';
		}
		private function do_edit()
		{
			$id = isset($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:0;
			$matkhau = $_POST['matkhau'];
			$matkhau = md5($matkhau);
			$hoten = $_POST['hoten'];
			$hoten = $this->encode($hoten);
			$this->model->execute("update tbl_user set matkhau='$matkhau',hoten='$hoten' where pk_user_id=$id");
			header('location: admin.php?controller=user');
		}
		private function getdata_add_user()
		{
			$form_action = "admin.php?controller=add_edit_user&action=do_add";
			include 'view/backend/view_add_edit_user.php';
		}
		private function do_add()
		{
			$tendangnhap = $_POST['tendangnhap'];
			$tendangnhap = $this->encode($tendangnhap);
			$matkhau = $_POST['matkhau'];
			$matkhau = md5($matkhau);
			$hoten = $_POST['hoten'];
			$hoten = $this->encode($hoten);
			$this->model->execute("insert into tbl_user(tendangnhap,matkhau,hoten) values('$tendangnhap','$matkhau','$hoten')");
			header('location: admin.php?controller=user');

		}
		
	}
	new controller_add_edit_user();
 ?>