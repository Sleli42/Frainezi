<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="../style/acceuil.css"></head>

<body><center>
<h2>Frainezi ◦ Paris</h2>
<div class="main">
<table class="table_up">
	<td class="keylr">◀
	</td>
	<td>

<div class="slideshow">
<ul>
<li><img style="width: 800px;" src="../img/dumonde.jpg"></li>
	<li><img style="width: 800px;" src="../img/iss.jpg"></li>
		<li><img  style="width: 800px;" src="../img/decoupe.jpg"></li>
</ul>
		</div>
	</td>
	<td class="keylr">►
	</td>
		</table>

</div>

<div id="offres"></div>
</center>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js">
	</script>

	<script type="text/javascript">
  		(function($){
  setInterval(function(){
    $(".slideshow ul li:first-child").animate({"margin-left": -850}, 800, function(){
        $(this).css("margin-left",0).appendTo(".slideshow ul");
    });
}, 3500);
})(jQuery);
	</script>
</body>
</html>
