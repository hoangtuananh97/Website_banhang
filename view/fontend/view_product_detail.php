<div id="product-detail">
	<div id="image">
		<script type="text/javascript">
			$(document).ready(function(){
			  $('#image-detail').zoom();
		});
	</script>
		<p id="image-detail"><img src="public/images/product/<?php echo $product->c_img; ?>" width="200px"></p>
		<div id="description">
			<div id="title"><?php echo $product->c_name; ?></div>
			<div id="category">Danh mục: <?php echo $category->c_name; ?></div>
			<div id="price">Giá: <?php echo $product->c_price; ?></div>
			<div id="description-detail"><p><?php echo $product->c_description; ?></p></div>
			<div class="select-product"><a href="chon-hang">Chọn Sản Phẩm</a></div>
		</div>
		<div style="clear: both"></div>
	</div>
	<fieldset>
		<legend>Chi Tiết</legend>
		<div><p><?php echo $product->c_content; ?></p></div>
	</fieldset>
</div>