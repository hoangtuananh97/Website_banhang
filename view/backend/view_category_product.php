<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">category_product</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th>Tên Danh Mục</th>
					<th>Xử Lý</th>
				</tr>
				<?php 	
					foreach ($list_category_product as $rows) {
				 ?>
				 <tr>
				 	<td><?php echo $rows->tendanhmuc; ?></td>
					<td style="width: 100px;">
						<a href="admin.php?controller=category_product&action=delete&id=<?php echo $rows->pk_category_product_id; ?>">Delete</a>
						<a href="admin.php?controller=add_edit_category_product&action=edit&id=<?php echo $rows->pk_category_product_id; ?>">Edit</a>
					</td>
				 </tr>
				 <?php } ?>
			</table>
			<div>
				<ul class="pagination">
					<li><a>Trang</a></li>
					<?php 
						for ($i=1; $i <= $num_page; $i++) { 
					 ?>
					 <li><a href="admin.php?controller=category_product&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					 <?php } ?>
				</ul>
			</div>
			<a href="admin.php?controller=add_edit_category_product&action=add" class="btn btn-primary">Thêm Sản Phẩm</a>
		</div>
	</div>
</div>