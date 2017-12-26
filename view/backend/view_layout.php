<!DOCTYPE html>
<html>
<head>
	<title>Trang Quản Trị</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
	<script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Quản Trị</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="admin.php?controller=category_product">Danh mục sản phẩm</a></li>
					<li class="active"><a href="admin.php?controller=origin">Hãng sản phẩm</a></li>
					<li class="active"><a href="admin.php?controller=list_product">Danh sách sản phẩm</a></li>
					<li class="active"><a href="admin.php?controller=news">Tin tức</a></li>
					<li class="active"><a href="admin.php?controller=adv">Quản cáo</a></li>
					<li class="active"><a href="admin.php?controller=user">User</a></li>
					<li class="active"><a href="admin.php?controller=logout">Đăng xuất</a></li>
				</ul>
				<div style="text-align: right; color:white;">
					<div style="line-height: 50px;"><span style="margin-right:10px;">User: <?php echo $_SESSION['user']; ?></span><a href="#">Đổi Mật Khẩu</a></div>
				</div>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<div class="container-fluid">
		<?php 
			if(file_exists("controller/backend/$controller") == true && $controller != '')
			{
				include "controller/backend/$controller";
			}
		 ?>
	</div>
	

</body>
</html>