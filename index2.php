<?php
//Cookie setzen
session_start();
$verhalten = 0;

//ist die Session "username" nicht vorhanden?
if(!isset ($_SESSION["username"]) and !isset($_GET["page"])){
	$verhalten = 0;
}
if($_GET["page"] == "log"){
$user = $_POST["user"];
$passwort = $_POST["passwort"];

//spaeter: Begrueßung des Nutzers
if($user == "Vera" and $passwort == "passwort"){
$_SESSION["username"] = $user;
$verhalten = 1;
} 
// Fehlermeldung
else{
$verhalten =2;
}
}
?>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
	<?php
	if($verhalten ==1){
	?>
<!-- Weiterleitung nach erfolgreichem Login-->
		<meta http-equiv="refresh" content="3; URL=vegan2.php"/>
	<?php
	}
	?>
</head>
<body>
	<!-- php öffnen und schließen = Trick für mehr Übersichtlichkeit, man kann dazwischen einfach html schreiben-->
	<?php
		if($verhalten == 0){
	?>
	Login<br/>
	<div class="wrapper">
		<form method="post" action="index2.php?page=log">
		    <input type="text" class="eingabe" placeholder ="Username" name="user"/> <br/><br/>
			<input type="password" class="eingabe" placeholder ="Passwort" name="passwort"/><br/><br/>
			<input type="submit" class="button" value="Einloggen"/>
		</form>
	</div>
	<?php
	}
	if($verhalten ==1){
	?>
	<?php
	}
	if ($verhalten ==2){
	?>
	Fehler! <a href="index2.php">zurück zum Login</a>
	<?php
	}
	?>
</body>
</html>