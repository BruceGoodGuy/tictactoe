$(document).ready(function(){
	$.ajax({
		type: "POST",
		dataType: "html",
		url: "page/home.php",
		success: function(data){
			$(".show").html(data)
		}
	})
})