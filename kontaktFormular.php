<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8"> 
		<title> Kontaktformular - erfolgreich gesendet </title>
	<?php include("includes/meta.php"); ?>
	  <style>
		:root {
		  --banner-top: #b167eb;
		  --banner-bottom: #4bd8f6;
		}
	  </style>		
	</head>
	
	
	<body>
	<?php include("includes/header.php"); ?>	
	<main class="container">
	
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
		</div>
		
		<br>
		Wir werden dir schnellstmöglich an 
		<strong> 
		<?php
			echo $_POST["kMail"];
		?>
		</strong>
		antworten.
		
	</main>
	<?php include("includes/bottom-navigation.php"); ?>
	</body> 
</html>