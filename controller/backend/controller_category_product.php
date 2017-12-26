<?php 
	/**
	* 
	*/
	class controller_category_product extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$action = isset($_GET['action'])?$_GET['action']:'';
			echo "$action";
			switch ($action) {
				case 'delete':
					$id = isset($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:0;
					echo $id;
					$this->model->execute("delete from tbl_danhmuc where pk_category_product_id=$id");
					header('location: admin.php?controller=category_product');
				break;
			}
			$record_per_page = 5;
			$total_record = $this->model->num_row('select pk_category_product_id from tbl_danhmuc');
			$num_page = ceil($total_record/$record_per_page);
			$page = isset($_GET['page'])&&is_numeric($_GET['page'])?$_GET['page']:1;
			$from = ($page-1)*$record_per_page;
			echo "$from";
			$list_category_product = $this->model->fetch("select * from tbl_danhmuc limit $from,$record_per_page");
			include 'view/backend/view_category_product.php';
		}
	}
	new controller_category_product();
 ?>