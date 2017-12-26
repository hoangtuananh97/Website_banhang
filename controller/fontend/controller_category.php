<?php 
	/**
	* 
	*/
	class controller_category extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$category = $this->model->fetch("select * from tbl_category_product");
			include "view/fontend/view_category_product.php";
		}
	}
	new controller_category();
 ?>