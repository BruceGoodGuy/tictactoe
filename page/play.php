<div class="play-con">
	<?php 
		for($i=1;$i<=3;$i++)
		{
			for($j=1;$j<=3;$j++)
			{
			?>
				<div oncontextmenu="return false" class="boxbox" x="<?=$i?>" y="<?=$j?>"></div>
			<?php
			}
		}
	?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var posX = [];
		var posO = [];
		$(".boxbox").click(function(){
			if($(this).html()=='')
				{
					$(this).html("x")
					var x = $(this).attr("x")
					var y = $(this).attr("y")
					posX = x + y
					console.log(posX)
				}

		})
		$(".boxbox").contextmenu(function(){
		if($(this).html()=='')
			$(this).html("O")
		})
	})
</script>