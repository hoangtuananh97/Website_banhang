<?php 
	/**
	* 
	*/
	class controller_product_detail extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$id = isset($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:0;
			$product = $this->model->fetch_one("select * from tbl_product where pk_product_id=$id");
			$category = $this->model->fetch_one("select c_name from tbl_category_product where pk_category_product_id = $product->fk_category_product_id");
			include 'view/fontend/view_product_detail.php';
		}
	}
	new controller_product_detail();
 ?>