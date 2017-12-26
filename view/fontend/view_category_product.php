<!-- category -->
<div id="category">
	<div id="title-category">
		<p>Danh Mục Sản Phẩm</p>
	</div>
	<div id="content-category">
		<ul>
			<?php 
				foreach ($category as $rows) {
			 ?>
			<li><a href="index.php?controller=category_product&id=<?php echo $rows->pk_category_product_id; ?>"><?php echo $rows->c_name; ?></a></li>
			<?php } ?>
		</ul>
	</div>
</div>
<!-- end category -->