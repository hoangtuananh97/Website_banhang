<?php 
	/**
	* 
	*/
	class controller_origin extends controller
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
					$this->model->execute("delete from tbl_hangsanxuat where pk_origin_id=$id");
					header('location: admin.php?controller=origin');
				break;
			}
			$record_per_page = 5;
			$total_record = $this->model->num_row('select pk_origin_id from tbl_hangsanxuat');
			$num_page = ceil($total_record/$record_per_page);
			$page = isset($_GET['page'])&&is_numeric($_GET['page'])?$_GET['page']:1;
			$from = ($page-1)*$record_per_page;
			echo "$from";
			$list_origin = $this->model->fetch("select * from tbl_hangsanxuat limit $from,$record_per_page");
			include 'view/backend/view_origin.php';
		}
	}
	new controller_origin();
 ?>