<?php 
	/**
	* 
	*/
	class controller_product extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$key = isset($_GET['key'])?$_GET['key']:'';
			$record_per_page = 20;
			$total_record = $this->model->num_row("select pk_product_id from tbl_product where c_name like '%$key%'");
			$num_page = ceil($total_record/$record_per_page);
			$page = isset($_GET['page'])&&is_numeric($_GET['page'])?$_GET['page']:1;
			$from = ($page-1)*$record_per_page;
			$list_product = $this->model->fetch("select * from tbl_product where c_name like '%$key%' limit $from,$record_per_page");
			include 'view/fontend/view_search.php';
		}
	}

	new controller_product();
 ?>