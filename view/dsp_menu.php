<?php
	echo "<div id='menu'>";
	echo "<a href='/index.php'>Home</a> | ";

	echo "<a id='cart' href='/cart.php'>Shopping cart</a> | ";

	if(isset($_SESSION['user_id'])){
		echo "<a href='config/logout.php'>Logout</a>";
	}else{
		echo "<a href='/login.php'>Login</a>";
	}
	echo "</div>";
?>

