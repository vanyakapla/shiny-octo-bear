<?php
	class shopping_cart {
		function addcart(){
			session_start();
			include("connect_db.php");
			include("dbug.php");
			$product_id = $_GET['id'];

			$shoppingcart = "insidecart_" . $product_id;

		   	if(isset($_SESSION[$shoppingcart])){
		   		$amount = $_SESSION[$shoppingcart]['amount'] + 1;
		   		$productarray = array(
			   		"product_id" => $product_id,
			   		"amount" => $amount,
			   		);
		   	}else{
			   	$productarray = array(
			   		"product_id" => $product_id,
			   		"amount" => 1,
			   		);
			}

		   	$_SESSION[$shoppingcart] = $productarray;

		   	if(isset($_SESSION["cartcounter"])){
		   		$_SESSION["cartcounter"] = $_SESSION["cartcounter"] + 1;

		   	}else{
		   		$_SESSION["cartcounter"] = 1;
		   	}
		   	?>
		   	<html>
			   	<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
			   	<script type="text/javascript">
			   		$('#menu').remove;
			   	</script>
			</html>
		   	<?php
		}
	}
?>