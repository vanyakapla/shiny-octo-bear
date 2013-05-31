<?php
	class shopping_cart {
		function addcart(){
			include("connect_db.php");
			include("dbug.php");
			$product_id = $_GET['id'];
			$sqlproducts2 = "SELECT * FROM tbl_products WHERE id = ". $product_id ." ";

		    $resultproducts2 = mysql_query($sqlproducts2) 
		   		or die(mysql_error());

		   	$array = mysql_fetch_assoc($resultproducts2);
		   	echo json_encode($array);

		   	echo $array['name'];

		   	new dBug($array);

		}
	}
?>