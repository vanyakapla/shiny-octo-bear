<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="library/css/style.css">
</head>
<body>
	<div id="outer">
		<div id="header"></div>
		<div id="content">
			<?php
				include("config/user_class.php");
				include("view/dsp_loginform.php");
			?>
		</div>

		<div id="footer">
				<div class="footer">&copy; Stephen Klaasen</div>
		</div>
	</div>
</body>
</html>