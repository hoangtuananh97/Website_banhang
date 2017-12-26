<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Danh Sách Sản Phẩm</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr style="text-align: center;">
					<th>Tên Sản Phẩm</th>
					<th>Màu Sắc</th>
					<th>Khuyến Mãi</th>
					<th>Giá Gốc</th>
					<th>Giá Khuyến Mãi</th>
					<th>Kiểu Dáng</th>
					<th>Chi Tiết</th>
					<th>Ảnh</th>
					<th>Hãng Sản Xuất</th>
					<th></th>
				</tr>
				<?php 
					foreach ($list_product as $product) {
						$origin11 = $this->model->fetch_one("select tenhangsanxuat from tbl_hangsanxuat inner join tbl_sanpham on tbl_sanpham.id_hangsanxuat = tbl_hangsanxuat.pk_origin_id and tbl_sanpham.id_hangsanxuat=$product->id_hangsanxuat");
				 ?>
				 <tr style="text-align: center;">
				 	<td><?php echo $product->tensanpham; ?></td>
				 	<td style="width: 100px;"><?php echo $product->mausac; ?></td>
				 	<td class="<?php echo $product->khuyenmai==1?'glyphicon glyphicon-ok':''; ?>"></td>
				 	<td style="width: 100px;"><?php echo $product->giagoc; ?></td>
				 	<td style="width: 100px;"><?php echo $product->giakhuyenmai; ?></td>
				 	<td><?php echo $product->kieudang; ?></td>
				 	<td><?php echo $product->chitiet; ?></td>
				 	<td style="width: 150px;">
				 		<?php 
				 			if($product->anhsanpham != '' && file_exists("public/upload/product/$product->anhsanpham"))
				 			{
				 		 ?>
				 		 <img src="public/upload/product/<?php echo $product->anhsanpham; ?>" style="width:150px;">
				 		 <?php } ?>
				 	</td>
				 	<td><?php echo $origin11->tenhangsanxuat; ?></td>
				 	<td style="width: 100px;">
				 		<a href="admin.php?controller=add_edit_product&action=edit&id=<?php echo $product->id_sanpham; ?>">Edit</a>
				 		<a href="admin.php?controller=list_product&action=delete&id=<?php echo $product->id_sanpham; ?>">Delete</a>
				 	</td>
				 </tr>
				 <?php } ?>
			</table>
			<ul class="pagination">
				<li><a href="">Trang</a></li>
				<?php 
					for($i = 1; $i<=$num_page; $i++)
					{
				 ?>
				 <li><a href="admin.php?controller=list_product&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				 <?php } ?>
			</ul>
		</div>
	</div>
</div>