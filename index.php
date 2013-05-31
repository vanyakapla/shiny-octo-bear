<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="library/css/style.css">
	<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
	<script src="library/js/cart_add.js"></script>
</head>
<body>
	<div id="outer">
		<div id="header"></div>
		<div id="content">
			<?php
				session_start();
				include("config/dbug.php");
				include("config/connect_db.php");
				include("view/dsp_menu.php");
				include("view/dsp_index.php");
				new dBug($_SESSION);
			?>
		</div>

		<div id="footer">
				<div class="footer">&copy; Stephen Klaasen</div>
		</div>
	</div>
</body>
</html>