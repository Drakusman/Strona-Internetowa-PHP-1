<!DOCTYPE html>
<html>
	<head>
		<title>Moja strona domowa</title>
		<meta charset="UTF-8">
		<meta name="description" content="Strona domowa">
		<meta name="keywords" content="słowa, kluczowe">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body>

			<!-- warstwa z menu -->
			<div class="menu">
				<a href="index.php">Strona główna</a>
				<a href="index.php?strona=omnie">O mnie</a>
				<a href="index.php?strona=linki">Ulubione linki</a>
				<a href="index.php?strona=galeria">Galeria</a>
				<a href="index.php?strona=ksiegagosci">Księga gości</a>
				<a href="index.php?strona=goscie">Goście</a>
			</div>
			
			<!-- warstwa z tekstem -->
			<div class="tekst">
	
			<?php
			
				// jesli w URL jest przekazany parametr strona, dołączamy plik
				if (isset($_GET['strona'])) {
					
					$plik = $_GET['strona'] . ".php";
					include "files/$plik";
					
				} else {
					
					// w innym wypadku, dolaczamy plik stronaglowna.php
					include "files/stronaglowna.php";
					
				}
			
			?>
			
	
			</div>

	</body>
</html>

