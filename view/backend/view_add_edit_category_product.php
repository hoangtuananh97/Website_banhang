<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Category</div>
		<div class="panel-body">
			<form action="<?php echo $form_action; ?>" method="post">
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Tên Danh Mục</div>
						<div class="col-md-10">
							<input type="text" name="tendanhmuc" value="<?php echo isset($category_product->tendanhmuc)?$category_product->tendanhmuc:''; ?>" class="form-control" required>
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