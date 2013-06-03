$(document).ready(function(){

	var counter = $("#counter").attr("name");

		counter = parseInt(counter);

		if( counter === 0 ){
			$('#cart').text('Shopping Cart (' + 0 + ')');
		}else{
			$('#cart').text('Shopping Cart (' + counter + ')');
		}

	$(".add").click(function(){
		var fetch_id = $(this).attr("name");
		
		$.ajax({
			type: "POST",
			url: "config/addCart.php?id="+fetch_id,
			dataType:'json',
		});

		counter = counter + 1;

		if( counter === 0 ){
			$('#cart').text('Shopping Cart (' + 0 + ')');
		}else{
			$('#cart').text('Shopping Cart (' + counter + ')');
		}

		$('#counter').attr('name', counter);

	});
	
});