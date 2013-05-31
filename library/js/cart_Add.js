$(document).ready(function(){

	$(".add").click(function(){
		var fetch_id = $(this).attr("name");
		
		$.ajax({
			type: "POST",
			url: "config/addCart.php?id="+fetch_id,
			dataType:'json',
		});
	});
	
});