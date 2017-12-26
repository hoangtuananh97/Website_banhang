<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">origin</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th>Tên Hãng</th>
					<th>Danh Mục</th>
					<th>Xử Lý</th>
				</tr>
				<?php 	
					foreach ($list_origin as $rows) {
			 			$category = $this->model->fetch_one("select * from tbl_danhmuc where pk_category_product_id = $rows->fk_category_product_id");
				 ?>
				 <tr>
				 	<td><?php echo $rows->tenhangsanxuat; ?></td>
				 	<td><?php echo "$category->tendanhmuc"; ?></td>
					<td style="width: 100px;">
						<a href="admin.php?controller=origin&action=delete&id=<?php echo $rows->pk_origin_id; ?>">Delete</a>
						<a href="admin.php?controller=add_edit_origin&action=edit&id=<?php echo $rows->pk_origin_id; ?>">Edit</a>
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
					 <li><a href="admin.php?controller=origin&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					 <?php } ?>
				</ul>
			</div>
			<a href="admin.php?controller=add_edit_origin&action=add" class="btn btn-primary">Thêm Danh Mục</a>
		</div>
	</div>
</div>