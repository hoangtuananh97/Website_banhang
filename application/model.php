<?php 
	/**
	* 
	*/
	class model
	{
		public function fetch($sql)
		{
			global $db;
			$result = mysqli_query($db,$sql);
			$list = array();
			while($rows = mysqli_fetch_object($result))
			{
				$list[] = $rows;
			}
			return $list;
		}
		public function fetch_one($sql)
		{
			global $db;
			$result = mysqli_query($db,$sql);
			return mysqli_fetch_object($result);
		}
		public function num_row($sql)
		{
			global $db;
			$result = mysqli_query($db,$sql);
			return mysqli_num_rows($result);
		}
		public function execute($sql)
		{
			global $db;
			mysqli_query($db,$sql);
		}
	}
 ?>