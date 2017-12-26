<?php 
	/**
	* 
	*/
	class controller_user extends controller
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
					$this->model->execute("delete from tbl_user where pk_user_id=$id");
					header('location: admin.php?controller=user');
				break;
			}
			$record_per_page = 5;
			$total_record = $this->model->num_row('select pk_user_id from tbl_user');
			$num_page = ceil($total_record/$record_per_page);
			$page = isset($_GET['page'])&&is_numeric($_GET['page'])?$_GET['page']:1;
			$from = ($page-1)*$record_per_page;
			echo "$from";
			$list_user = $this->model->fetch("select * from tbl_user limit $from,$record_per_page");
			include 'view/backend/view_user.php';
		}
	}
	new controller_user();
 ?>