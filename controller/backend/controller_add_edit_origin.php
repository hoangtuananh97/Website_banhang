<?php 
	/**
	* 
	*/
	class controller_add_edit_origin extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$action = isset($_GET['action'])?$_GET['action']:'';
			$action = $this->encode($action);
			switch($action){
				case 'edit':
					$this->getdata_edit();
				break;
				case 'do_edit':
					$this->do_edit();
				break;
				case 'add':
					$this->getdata_add();
				break;
				case 'do_add':
					$this->do_add();
				break;
			}
		}
		private function getdata_edit()
		{
			$id = isset($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:0;
			$form_action = "admin.php?controller=add_edit_origin&action=do_edit&id=$id";
			$origin = $this->model->fetch_one("select * from tbl_hangsanxuat where pk_origin_id=$id");
			include 'view/backend/view_add_edit_origin.php';
		}
		private function do_edit()
		{
			$id = isset($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:0;
			$name_origin = $_POST['tenhangsanxuat'];
			$name_origin = $this->encode($name_origin);
			$category = isset($_POST['category'])&&is_numeric($_POST['category'])?$_POST['category']:0;
			$this->model->execute("update tbl_hangsanxuat set tenhangsanxuat='$name_origin', fk_category_product_id=$category where pk_origin_id=$id");
			header('location: admin.php?controller=origin');
		}
		private function getdata_add()
		{
			$form_action = "admin.php?controller=add_edit_origin&action=do_add";
			include 'view/backend/view_add_edit_origin.php';
		}
		private function do_add()
		{
			$name_origin = $_POST['tenhangsanxuat'];
			$name_origin = $this->encode($name_origin);
			$category = isset($_POST['category'])&&is_numeric($_POST['category'])?$_POST['category']:0;
			$this->model->execute("insert into tbl_hangsanxuat(tenhangsanxuat,fk_category_product_id) values('$name_origin',$category)");
			header('location: admin.php?controller=origin');
		}
	}
	new controller_add_edit_origin();
 ?>