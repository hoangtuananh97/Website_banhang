<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Origin</div>
		<div class="panel-body">
			<form action="<?php echo $form_action; ?>" method="post">
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Hãng Sản Xuất</div>
						<div class="col-md-10">
							<input type="text" name="tenhangsanxuat" value="<?php echo isset($origin->tenhangsanxuat)?$origin->tenhangsanxuat:''; ?>" required class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Danh Mục</div>
						<div class="col-md-10">
							<select name="category">
								<?php 
									$category = $this->model->fetch("select * from tbl_danhmuc");
									foreach ($category as $rows) {
								 ?>
								 <option <?php echo isset($origin->fk_category_product_id)&&$origin->fk_category_product_id == $rows->pk_category_product_id ? "selected":""; ?> value="<?php echo $rows->pk_category_product_id; ?>"><?php echo $rows->tendanhmuc; ?></option>
								 <?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-10"><input type="submit" value="Thực Hiện" class="btn btn-primary"></div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>