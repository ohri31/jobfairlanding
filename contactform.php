<!DOCTYPE html>

<html>

	<head>

		<title>Kontakt</title>

		<link rel="stylesheet" type="text/css" href="css/main.css">

	</head>

	<body id="contact-body">
	<?php
		include 'menu.html';
	?>

		<div class="middle">
			<div class="contact">
				<h2>KONTAKT</h2>
			</div>
			<div class="division">
				<label for="name">IME</label>
				<input type="text" name="name" id="contact_name_mail" size="35">
				<label for="email">E-MAIL*</label>
				<input type="text" name="email" id="contact_name_mail" size="35">
				<label for="message">PORUKA*</label>
				<textarea name="message" id="contact-message" rows="8"></textarea>
				<button type="submit" value="send" class="sendmailbutton">POŠALJI</button>
			</div>
			<div class="division">
				<div id="bord_names">
					<p class="name">Edita Milišić</p>
					<p class="pozicija">Glavni organizator projekta</p>
					<p class="broj_mail">edita.milisic@jobfair.ba<br>
										+387 62 225 883</p>
				</div>
				<div id="bord_names">
					<p class="name">Damir Bezdrob</p>
					<p class="pozicija">Koordinator tima za ljudske resurse i logistiku</p>
					<p class="broj_mail">damir.bezdrob@jobfair.ba<br>
										+387 62 225 883</p>
				</div>
				<div id="bord_names">
					<p class="name">Lejla Nukic</p>
					<p class="pozicija">Koordinator tima za odnose sa kompanijama</p>
					<p class="broj_mail">lejla.nukic@jobfair.ba<br>
										+387 62 225 883</p>
				</div>
				<div id="bord_names">
					<p class="name">Aldin Kiselica</p>
					<p class="pozicija">Koordinator tima za informatičku podršku</p>
					<p class="broj_mail">aldin.kiselica@jobfair.ba<br>
										+387 61 760 892</p>
				</div>
				<div id="bord_names">
					<p class="name">Berina Cocalic</p>
					<p class="pozicija">Koordinator tima za dizajn i publikacije</p>
					<p class="broj_mail">berina.cocalic@jobfair.ba<br>
										+387 62 225 883</p>
				</div>
				<div id="bord_names">
					<p class="name">Ilma Cengic</p>
					<p class="pozicija">Koordinator tima za odnose s javnošću</p>
					<p class="broj_mail">ilma.cengic@jobfair.ba<br>
										+387 62 225 883</p>
				</div>
			</div>
		</div>
	</body>

</html>