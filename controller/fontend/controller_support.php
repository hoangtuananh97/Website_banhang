<?php 
	/**
	* 
	*/
	class controller_support extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$support = $this->model->fetch("select * from tbl_support");
			include 'view/fontend/view_support.php';
		}
	}
	new controller_support();
 ?>