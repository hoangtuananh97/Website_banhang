<?php 
	/**
	* 
	*/
	class controller_new_product extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$new_products = $this->model->fetch("select * from tbl_product order by pk_product_id desc limit 0,20");
			include 'view/fontend/view_new_product.php';
		}
	}
	new controller_new_product();
 ?>