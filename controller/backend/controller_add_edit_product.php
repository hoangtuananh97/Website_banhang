<?php 
	/**
	* 
	*/
	class controller_add_edit_product extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$action = isset($_GET['action'])?$_GET['action']:'';
			$action = $this->encode($action);
			switch ($action) {
				case 'edit':
					$id = isset($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:0;
					$product = $this->model->fetch_one("select * from tbl_sanpham where id_sanpham=$id");
					$form_action = "admin.php?controller=add_edit_product&action=do_edit&id=$id";
					include 'view/backend/view_add_edit_product.php';	
				break;
			}
		}
	}
	new controller_add_edit_product();
 ?>