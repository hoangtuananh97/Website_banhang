<!DOCTYPE html>
<html>
<head>
	<title>WebShop</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="view/fontend/style.css"/>
	<script type="text/javascript" src="public/backend/js/jquery.js"></script>
	<script type="text/javascript" src="public/fontend/js/jquery.zoom.js"></script>
</head>
<script type="text/javascript">
	function fixmenu(){
		if(document.documentElement.scrollTop > 150)
		{
			document.getElementById("menu").setAttribute("style","position:fixed;top: 0px;")
		}
		else
		{
			document.getElementById("menu").setAttribute("style","position: relative")
		}
	}
	function search()
	{
		if(event.keyCode == 13){
			var key = document.getElementById("txtsearch").value;
			location.href="index.php?controller=search&key="+key;
		}
	}
</script>
<body onscroll="fixmenu()">
	<div id="wrap">
		<!-- header -->
		<div id="header">
			<!-- head -->
			<div id="head">
				<div id="more">
					<ul>
						<li><a href="Home">Phone: 012345789</a></li>
						<li><a href="Lien-He">Email: nguyenhonghai1997bg@gmail.com</a></li>
					</ul>
					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</div>
			<!-- end head -->
			<!-- banner-->
			<div id="banner">
				<div id="logo"></div>
				<div id="search">
					<input type="text" onkeypress="search();" name="txtsearch" id="txtsearch" placeholder="Nhập từ khóa tìm kiếm">
				</div>
				<div id="phone">1 Sản Phẩm</div>
			</div>
			<!-- end banner -->
		</div>
		<!-- end header -->
		<!-- menu -->
		<div id="menu">
			<ul>
				<li><a href="index.php">Trang Chủ</a></li>
				<li><a href="index.php?controller=about">Giới Thiệu</a></li>
				<li><a href="tin-tuc">Tin Tức</a></li>
				<li><a href="lien-he">Liên Hệ</a></li>
			</ul>
		</div>
		<!-- end menu -->
		<!-- main -->
		<div id="main">
			<!-- left -->
			<div id="left">
				<!-- category -->
				<?php 
					include 'controller/fontend/controller_category.php';
				 ?>
				<!-- end category -->
				<!-- support -->
				<?php 
					include 'controller/fontend/controller_support.php';
				 ?>
				<!-- end support -->
				<div style="clear: both;"></div>
				<!-- hot news -->
				<?php 
					include 'controller/fontend/controller_news.php';
				 ?>
				<!-- end hot newst -->
			</div>
			<!-- end left -->
			<!-- right -->
			<div id="right">
				<!-- slide product -->
				<?php 
					include 'controller/fontend/controller_slide.php';
				 ?>
				<!-- end slide product -->
				<?php 
					if(file_exists("controller/fontend/$controller") && $controller != "")
					{
						include "controller/fontend/$controller";
					}
				 ?>
				<!-- product -->
				<!-- end product -->
			</div>
			<div style="clear: both;"></div>
			<!-- end right -->
			<div class="line"></div>
			<!-- infor -->
			<div id="info">
				<div id="ship">
					<div class="wrap-image"><img src="public/images/icon2.png"></div>
					<div class="content-more">
						<p>Giao Hàng Miễn Phí</p>
						<span>Miễn phí nội thành Hà Nội</span>
					</div>
				</div>
				<div id="sale">
					<div class="wrap-image"><img src="public/images/icon1.png"></div>
					<div class="content-more">
						<p>Khuyến Mãi</p>
						<span>Khuyến mãi cho các đơn hàng trên 1000000đ</span>
					</div>
				</div>
				<div id="refunds">
					<div class="wrap-image"><img src="public/images/icon3.png"></div>
					<div class="content-more">
						<p>Hoàn Trả Tiền</p>
						<span>Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng miêu tả</span>
					</div>
				</div>
				<div style="clear: both;"></div>
			</div>
			<!-- end infor -->
		</div>
		<!-- end main -->
		<!-- footer -->
		<div id="footer">
			<div id="content-footer">
				<div class="info">
					<p>Về Chúng Tôi</p>
					<ul>
						<li><a href="">Trang Chủ</a></li>
						<li><a href="">Giới Thiệu</a></li>
						<li><a href="">Tin Tức</a></li>
						<li><a href="">Liên Hệ</a></li>
					</ul>
				</div>
				<div class="info">
					<p>Hướng Dẫn</p>
					<ul>
						<li><a href="">Hướng dẫn mua hàng</a></li>
						<li><a href="">Giao nhận và thanh toán</a></li>
						<li><a href="">Đổi trả và bảo hành</a></li>
						<li><a href="">Đăng ký thành viên</a></li>
					</ul>
				</div>
				<div class="info">
					<p>Chính Sách</p>
					<ul>
						<li><a href="">Chính sách vận chuyển</a></li>
						<li><a href="">Chính sách đổi trả</a></li>
						<li><a href="">Chính sách bảo hành</a></li>
						<li><a href="">Chính sách thanh toán</a></li>
					</ul>
				</div>
				<div class="info">
					<p>Điều Khoản</p>
					<ul>
						<li><a href="">Điều khoản sử dụng</a></li>
						<li><a href="">Điều khoản giao dịch</a></li>
						<li><a href="">Dịch vụ tiện ích</a></li>
						<li><a href="">Quyền sở hữu trí tuệ</a></li>
					</ul>
				</div>
				<div style="clear: both;"></div>
			</div>
			<!-- menu footer -->
			<div id="address">
				CÔNG TY TNHH SẢN XUẤT & DỊCH VỤ HƯNG VIỆT<br>
				MST: 0106463093. Ngày cấp: 21/02/2014.
				Đại diện: Ông Vũ Thế Hưng do Sở KHĐT Hải Dương cấp.<br>
				Trụ sở: La Xá, Thanh Tùng, Thanh Miện, Hải Dương<br>
				Bán hàng: Số 30/214 Nguyễn Xiển, Thanh Xuân, Hà Nội
				Điện thoại: 04 8585 8574 | Mobile: 0973 51 62 63
			</div>
			<!-- end menu footer -->
		</div>
		<!-- end footer -->
	</div>
</body>
</html>