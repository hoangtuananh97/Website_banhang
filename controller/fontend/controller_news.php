<?php 
	/**
	* 
	*/
	class controller_news extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			$news = $this->model->fetch("select * from tbl_news limit 0,3");
			include 'view/fontend/view_news.php';
		}
	}
	new controller_news();
 ?>