<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">User</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th>Tên Đăng Nhập</th>
					<th>Họ Tên</th>
					<th>Xử Lý</th>
				</tr>
				<?php 	
					foreach ($list_user as $rows) {
				 ?>
				 <tr>
				 	<td><?php echo $rows->tendangnhap; ?></td>
					<td><?php echo $rows->hoten; ?></td>
					<td style="width: 100px;">
						<a href="admin.php?controller=user&action=delete&id=<?php echo $rows->pk_user_id; ?>">Delete</a>
						<a href="admin.php?controller=add_edit_user&action=edit&id=<?php echo $rows->pk_user_id; ?>">Edit</a>
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
					 <li><a href="admin.php?controller=user&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					 <?php } ?>
				</ul>
			</div>
			<a href="admin.php?controller=add_edit_user&action=add" class="btn btn-primary">Thêm Sản Phẩm</a>
		</div>
	</div>
</div>