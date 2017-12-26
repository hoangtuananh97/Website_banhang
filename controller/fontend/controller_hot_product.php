<?php 
	/**
	* 
	*/
	class controller_hot_product extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$products = $this->model->fetch("select * from tbl_product where c_hotproduct=1 limit 0,8");
			include 'view/fontend/view_hot_product.php';
		}
	}
	new controller_hot_product();
 ?>