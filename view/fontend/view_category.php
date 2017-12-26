<div id="category-product">
	<div id="title-category-product"><p><?php echo $title->c_name; ?></p></div>
	<div id="content-category-product">
		<?php 
			foreach ($products as $rows) {
		 ?>
		<div class="product">
			<img src="public/images/product/<?php echo $rows->c_img; ?>" width="150px">
			<p><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" class="title-product"><?php echo $rows->c_name; ?></a><p>
				<p class="price-product"><?php echo number_format($rows->c_price)." đ"; ?></p>
			<p align="justify" class="description"><?php echo $rows->c_description; ?></p>
			<div class="select-product"><a href="chon-san-pham" >Chọn Sản Phẩm</a></div>
		</div>
		<?php } ?>
	</div>
	<!-- end chi tiet product -->
</div>