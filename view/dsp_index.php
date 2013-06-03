<?php


	$sqlproducts = "SELECT * FROM tbl_products ";

    $resultproducts = mysql_query($sqlproducts) 
   		or die(mysql_error());

    new dBug($resultproducts);

    if(isset($_SESSION['cartcounter'])){
        echo "<input type='hidden' id='counter' name='". $_SESSION['cartcounter'] ."'></input>";
    }else{
        echo "<input type='hidden' id='counter' name='0'></input>";
    }

    echo "<table border='2'>";
    echo "<tr>";
    while($rowproducts = mysql_fetch_array( $resultproducts )){
    	
    	echo "<td><img class='add' name='". $rowproducts['id'] ."' src='". $rowproducts['picture'] ."'><br>";
    	echo  $rowproducts['name'] . " $" . $rowproducts['price'] . "<br>";
    	echo "<button class='add' name='". $rowproducts['id'] ."'> Add to Cart</button></td>";
    	
    }

    echo "</tr>";
    echo "</table>";

?>

