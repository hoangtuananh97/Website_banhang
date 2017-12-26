<div class="col-md-9 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Product</div>
		<div class="panel-body">
			<form action="<?php echo $form_action; ?>" method="post">
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Tên Sản Phẩm</div>
						<div class="col-md-10">
							<input type="text" name="tensanpham" value="<?php echo isset($product->tensanpham)?$product->tensanpham:''; ?>" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Màu Sắc</div>
						<div class="col-md-10">
							<input type="text" name="mausac" value="<?php echo isset($product->mausac)?$product->mausac:''; ?>" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Danh Mục</div>
						<div class="col-md-10">
							<select>
								<?php 
									$categorys = $this->model->fetch("select * from tbl_hangsanxuat");
									foreach ($categorys as $category) {
								 ?>
								 <option value="<?php echo $category->pk_category_product_id; ?>" <?php echo $category->pk_origin_id==$product->id_hangsanxuat?"selected":''; ?>><?php echo $category->tenhangsanxuat; ?></option>
								 <?php } ?>
							</select>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>