<!doctype html>
<html lang="de">
	<head>
		<meta charset="UTF-8"> 
		<title> Kontaktformular - erfolgreich gesendet </title>
	</head>
	<body>
		Sehr geehrte/-r 
		<strong>
		<?php
			echo $_POST["kName"];
		?>
		</strong>
		<br>
		Vielen Dank, dass du uns diese Nachricht gesendet hast:
		<div>
			<?php
			echo $_POST["kNachricht"];
			?>
		<div>
		
		<br>
		Wir werden dir schnellstmöglich an 
		<strong> 
		<?php
			echo $_POST["kMail"];
		?>
		</strong>
		antworten
	</body> 
</html>