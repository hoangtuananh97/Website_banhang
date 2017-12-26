<?php 
	/**
	* 
	*/
	class controller_product extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$action = isset($_GET['action'])?$_GET['action']:'';
			$action = $this->encode($action);
			switch($action)
			{
				case 'delete':
					$id = isset($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:0;
					$this->model->execute("delete from tbl_sanpham where id_sanpham = $id");
					header('location: admin.php?controller=list_product');
				break;
			}
			$record_per_page = 20;
			$total_record = $this->model->num_row("select id_sanpham from tbl_sanpham");
			$num_page = ceil($total_record/$record_per_page);
			$page = isset($_GET['page'])&&is_numeric($_GET['page'])?$_GET['page']:1;
			$from = ($page-1)*$record_per_page;
			$list_product = $this->model->fetch("select * from tbl_sanpham limit $from,$record_per_page");
			include 'view/backend/view_product.php';
		}
	}

	new controller_product();
 ?>