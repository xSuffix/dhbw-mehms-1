<!DOCTYPE html>
<html lang="de">

<head>
	<title>Kontakt - DHBW Mehms</title>
	<link href="styles/formular.css" rel="stylesheet">
	<?php include("includes/meta.php"); ?>
	<style>
		:root {
			--banner-top: #67bfeb;
			--banner-bottom: #20b94f;
		}

		.kontakt {
			animation: 0.2s color-p-primary forwards;
		}
	</style>
</head>


<body>
	<?php include("includes/header.php"); ?>

	<main class="container">
		<section class="contact paper">
			<div>
				<h1>Kontakt</h1>
				<p>
					Du hast Fragen oder Anregungen an uns? Dann kontaktiere uns ganz einfach über dieses Formular.<br>
					Wir versuchen schnellstmöglich auf alle Anfragen zu antworten.
					Falls du ein Mehm mit uns teilen möchtest, kannst du das <a href="mehm-einsendung"><b>hier</b></a>.
				</p>
	
				<form action="kontakt-formular.php" method="post">
					<label for="name" class="required">Name</label>
					<input id="name" type="text" placeholder="Name" required name="kName">
					<label for="nachricht" class="required">Nachricht</label>
					<textarea id="nachricht" placeholder="Nachricht" required name="kNachricht"></textarea>
					<label for="mail" class="required">Mail</label>
					<input id="mail" type="email" placeholder="Mailadresse" required name="kMail">
					<button>Absenden</button>
				</form>
			</div>
		</section>
	</main>

	<?php include("includes/footer.php"); ?>
	<?php include("includes/bottom-navigation.php"); ?>
</body>

</html>