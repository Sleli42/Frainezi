<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="../style/homme.css"></head>
<body>
	<center>
		<div class="main" style="background-color: #c7e9ff;">
			<div class="slideshow">
				<ul>
					<li><img height="640px" width="640px" align="center" src="../img/photoshop/decoupe_joker.jpg"></li>
					<li><img height="640px" width="640px" align="center" src="../img/photoshop/decoupe_tshirt_noir.jpg"></li>
					<li><img height="640px" width="640px" align="center" src="../img/photoshop/decoupe_tshirt_rose.jpg"></li>
				</ul>
			</div>
		</div>
	</center>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js">
	</script>

	<script type="text/javascript">
  		(function($){
  setInterval(function(){
    $(".slideshow ul li:first-child").animate({"margin-left": -650}, 800, function(){
        $(this).css("margin-left",0).appendTo(".slideshow ul");
    });
}, 3500);
})(jQuery);
	</script>
</body>
</html>
