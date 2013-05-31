<?php
	$user = new user();
	if(!empty($_POST)){
		
		$user->checklogin();
	}
?>

<p class="text">
	U moet eerst inloggen om verder te kunnen gaan.
</p>

<form  method="post" action="#" >
	<table id="login">
		<tr>
			<th>
				Gebruikersnaam
			</th>
			<td>
				<input type="text" value="" name="username" id="username">
			</td>
		</tr>

		<tr>
			<th>
				Wachtwoord
			</th>
			<td>
				<input type="password" value="" name="password" id="password">
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<input type="submit" value="submit"  >
			</td>
		</tr>
	</table>
</form>