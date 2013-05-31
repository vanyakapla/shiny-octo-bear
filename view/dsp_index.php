<?php


	$sqlproducts = "SELECT * FROM tbl_products ";

    $resultproducts = mysql_query($sqlproducts) 
   		or die(mysql_error());

    new dBug($resultproducts);

    echo "<table border='2'>";
    echo "<tr>";
    while($rowproducts = mysql_fetch_array( $resultproducts )){
    	
    	echo "<td><img class='add' name='". $rowproducts['id'] ."' src='". $rowproducts['picture'] ."'><br>";
    	echo  $rowproducts['name'] . " " . $rowproducts['price'] . "<br>";
    	echo "Add to Cart" . $rowproducts['id'] ."</td>";
    	
    }
    echo "</tr>";
    echo "</table>";


?>