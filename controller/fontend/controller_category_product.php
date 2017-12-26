<?php 
	/**
	* 
	*/
	class controller_category_product extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$id = isset($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:0;
			$products = $this->model->fetch("select * from tbl_product where fk_category_product_id=$id limit 0,8");
			$title = $this->model->fetch_one("select c_name from tbl_category_product where pk_category_product_id=$id");
			include 'view/fontend/view_category.php';
		}
	}
	new controller_category_product();
 ?>