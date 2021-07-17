<!DOCTYPE html>
<html lang="de">

<head>
  <title>Kontakt - DHBW Mehms</title>
  <link href="styles/kontakt.css" rel="stylesheet">
  <?php include("includes/meta.php"); ?>
  <style>
    :root {
      --banner-top: #b167eb;
      --banner-bottom: #4bd8f6;
    }

    .kontakt {
      animation: 0.2s color-p-primary forwards;
    }
  </style>
</head>


<body>
  <?php include("includes/header.php"); ?>

  <main class="container">
	<section>	
		<h2> Kontakt </h2>
		<p> 
		Du hast Fragen oder Anregungen an uns? Dann kontaktiere uns ganz einfach über dieses Formular. <br>
		Wir versuchen schnellstmöglich auf alle Anfragen zu antworten. 
		Falls du ein Mehm mit uns teilen möchtest, kannst du das <b><a href="memeEinsendung.php">hier</a>.
		</p>
		
		<form action="kontaktFormular.php" method="post">
			<label for="name"> Name </label>
			<input id="name" type="text" placeholder="Name" required name="kName"> 
			<br>
			<label for="nachricht"> Nachricht </label>
			<textarea id="nachricht" placeholder="Nachricht" required name="kNachricht"></textarea>
			<br>
			<label for="mail"> Mail </label>
			<input id="mail" type="email" placeholder="Mailadresse" required name="kMail">
			<br>
			<button> Absenden </button>
		</form>
	</section>
  </main>

  <?php include("includes/footer.php"); ?>
  <?php include("includes/bottom-navigation.php"); ?>
</body>

</html>