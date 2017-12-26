<?php 
	/**
	* 
	*/
	class controller_slide extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$slides = $this->model->fetch("select * from tbl_slide limit 0,3");
			include 'view/fontend/view_slide.php';
		}
	}
	new controller_slide();
 ?>