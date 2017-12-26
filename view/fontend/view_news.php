<div id="hot-news">
	<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function(){
				$(".slide ul").animate({"margin-left":"-=250px"},1000,function(){
					$(".slide ul li:first").appendTo(".slide ul");
					$(".slide ul").css("margin-left",0);
				});
			},4000);
		});
	</script>
	<div id="title-hot-news">Tin Tức Mới</div>
	<div class="slide" style="margin-top: 5px;">
		<ul>
			<?php 
				foreach ($news as $rows) {
			 ?>
			<li>
				<img src="public/images/news/<?php echo $rows->c_img; ?>" width="250px" height="100px">
				<a style="margin-top: 5px; color: green;" href="index.php?controller=news&id=<?php echo $rows->pk_news_id; ?>"><?php echo $rows->c_name; ?></a>
				<div style="margin-top: 8px;"><?php echo $rows->c_description; ?></div>
			</li>
			<?php } ?>
		</ul>
	</div>
	<div style="clear: both;"></div>
</div>