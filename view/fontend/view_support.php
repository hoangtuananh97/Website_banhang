<div id="support">
	<div id="title-support">Hỗ Trợ Trực Tuyến</div>
	<div id="content-support">
		<ul>
			<?php 
				foreach ($support as $rows) {
			 ?>
			<li>
				<p><?php echo $rows->c_name; ?></p>
				<p><?php echo $rows->c_contact; ?></p>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>