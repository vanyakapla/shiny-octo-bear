<?php
	session_start();

	include("connect_db.php");
	include("seju.php");
	include("dBug.php");

	if ( isset($_POST['username']) AND  isset($_POST['password'])){

		$user = $_POST['username'];
		$encrypted = hash('sha256', md5($_POST['username'] .  $Bristle . $_POST['password']));

		$result = mysql_query("SELECT id, Username, Password, rights
							FROM tbl_user 
							WHERE username = ". "'" . mysql_escape_string(trim($user)). "'" .  "
							AND password = ". "'" .  mysql_escape_string(trim($encrypted)) . "'" .  "
							")
		or die(mysql_error());  

		$row =  mysql_fetch_array($result);
		
		if( $row['id'] > 0 ){

			$_SESSION['user_id'] = $row['id'];
			$_SESSION['rights'] = $row['rights'];


				if( $_SESSION['user_id'] > "0"){

					header("location:/index.php");

					exit;

					}
		}
		else{

			Echo"Wrong Username or Password!";

		}
	}
	else{

		Echo "U heeft geen wachtwoord of gebruikersnaam ingevoerd.";
	}

	


?>