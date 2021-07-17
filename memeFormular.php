<!DOCTYPE html>
<html lang="de">
	<head>
		<link href="styles/kontakt.css" rel="stylesheet">
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
	
	// HEEEELLLPPP https://www.w3schools.com/php/php_file_upload.asp ka was hier abgeht lol
	
	<body>
	<?php include("includes/header.php"); ?>	
	<main class="container">
	<?php $target_dir = "uploads/";	
	$target_file = $target_dir . basename($_FILES["mDatei"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	if (move_uploaded_file($_FILES["mDatei"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["mDatei"]["name"])). " has been uploaded.";
	} else {
    echo "Sorry, there was an error uploading your file.";}
	
	?>
	
	
	<section>
		<h1> Vielen Dank für deine Einsendung! </h1>
	<section>	
	</main>
	<?php include("includes/bottom-navigation.php"); ?>
	</body> 
</html>