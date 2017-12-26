<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">User</div>
		<div class="panel-body">
			<form action="<?php echo $form_action; ?>" method="post">
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Tên Đăng Nhập</div>
						<div class="col-md-10"><input type="text" name="tendangnhap" value="<?php echo isset($user->tendangnhap)?$user->tendangnhap:''; ?>" <?php echo isset($user->tendangnhap)?"disabled":"required"; ?> class="form-control"></div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Mật Khẩu</div>
						<div class="col-md-10"><input type="text" name="matkhau" required class="form-control"></div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Họ Và Tên</div>
						<div class="col-md-10"><input type="text" name="hoten" value="<?php echo isset($user->hoten)?$user->hoten:''; ?>" class="form-control" required></div>
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