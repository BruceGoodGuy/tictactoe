<div class="home-contain">
	<div class="home-logo">
		<img src="img/logo.gif">
		<div class="btn-play">Play</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$(".home-contain img").css("top","100px");
		setTimeout(function(){$(".btn-play").fadeIn()},200);
		$(".btn-play").click(function(){
			$(".home-contain img").css("top","-130px")
			$(".btn-play").fadeOut();
			setTimeout(function(){$.ajax({
				dataType: "html",
				url: "page/play.php",
				success: function(data){
					$(".show").html(data)
				}
			})},1000)
		})
	})
</script>