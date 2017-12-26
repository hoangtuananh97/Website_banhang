 <script type="text/javascript">
	$(document).ready(function(){
		var list_image = new Array();
		var n = 0;
		list_image[0] = "public/images/anh1.png";
		list_image[1] = "public/images/anh2.png";
		list_image[2] = "public/images/anh4.png";
		setInterval(function(){
			$("#slide-product img").fadeOut(2000,function(){
				n++;
				$("#slide-product img").attr("src",list_image[n]);
				$("#slide-product img").fadeIn(2000);
				if(n == list_image.length - 1)
				{
					n = -1;
				}
			});
		},4000);
	});
</script>
<div id="slide-product">
	<img src="public/images/anh1.png" width="862px" height="400px">
</div>