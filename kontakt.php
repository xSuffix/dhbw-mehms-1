<!DOCTYPE html>
<html lang="de">

<head>
  <title>Kontakt - DHBW Mehms</title>
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
    	<form action="scripts/kontaktFormular.php" method="post">
			<label for="name"> Name </label>
			<input id="name" type="text" placeholder="Name" required name="kName">
			<br>
			<label for="nachricht"> Nachricht </label>
			<textarea id="nachricht" type="text" placeholder="Nachricht" required name="kNachricht"></textarea>
			<br>
			<label for="mail"> Mail </label>
			<input id="mail" type="email" placeholder="Mailadresse" required name="kMail">
			<br>
			<button> Absenden </button>
		</form>
  </main>

  <?php include("includes/bottom-navigation.php"); ?>
</body>

</html>