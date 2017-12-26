<?php 
	/**
	* 
	*/
	class controller_add_edit_category_product extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$action = isset($_GET['action'])?$_GET['action']:'';
			$action = $this->encode($action);
			switch($action)
			{
				case 'edit':
					$this->getdata_category_product();
				break;
				case 'do_edit':
					$this->do_edit();
				break;
				case 'add':
					$this->getdata_add_category_product();
				break;
				case 'do_add':
					$this->do_add();
				break;
			}
		}
		private function getdata_category_product()
		{
			$id = isset($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:0;
			$category_product = $this->model->fetch_one("select * from tbl_danhmuc where pk_category_product_id=$id");
			$form_action = "admin.php?controller=add_edit_category_product&action=do_edit&id=$id";
			include 'view/backend/view_add_edit_category_product.php';
		}
		private function do_edit()
		{
			$id = isset($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:0;
			$tendanhmuc = $_POST['tendanhmuc'];
			$tendanhmuc = $this->encode($tendanhmuc);
			$this->model->execute("update tbl_danhmuc set tendanhmuc='$tendanhmuc' where pk_category_product_id=$id");
			header('location: admin.php?controller=category_product');
		}
		private function getdata_add_category_product()
		{
			$form_action = "admin.php?controller=add_edit_category_product&action=do_add";
			include 'view/backend/view_add_edit_category_product.php';
		}
		private function do_add()
		{
			$tendanhmuc = $_POST['tendanhmuc'];
			$tendanhmuc = $this->encode($tendanhmuc);
			$matkhau = $_POST['matkhau'];
			$matkhau = md5($matkhau);
			$hoten = $_POST['hoten'];
			$hoten = $this->encode($hoten);
			$this->model->execute("insert into tbl_danhmuc(tendanhmuc) values('$tendanhmuc')");
			header('location: admin.php?controller=category_product');

		}
		
	}
	new controller_add_edit_category_product();
 ?>