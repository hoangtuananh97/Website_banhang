<?php 
	/**
	* 
	*/
	class controller
	{
		public $model;
		function __construct()
		{
			$this->model = new model();
		}
		public function encode($str)
		{
			$string = htmlspecialchars($str);
			$string = str_replace("'", "\'", $string);
			return $string;
		}
	}
 ?>