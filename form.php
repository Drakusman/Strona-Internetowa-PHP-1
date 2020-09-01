		
<?php


// tworzymy połączenie do bazy danych: serwer, uzytkownik, haslo, baza danych
// i przypisujemy połączenie do zmiennej $link
$link = mysqli_connect('localhost','zajecia7','zaliczenie123k','zajecia7');

// jeśli coś nie tak z połączeniem, wyświetlamy informację o braku połączenia
if (!$link) {
	
	echo "<h1>Nie udało się połączyć do bazy danych</h1>";
	
}


// sprawdzamy, czy są dane przesylane metoda post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	// pobieramy dane z tablicy post i przypisujemy do zmiennych
	
	$imie = $_POST['imie'];
	$skad = $_POST['skad'];
	$wiek = $_POST['wiek'];
	$opinia = $_POST['opinia'];
	$adres_ip = $_SERVER['REMOTE_ADDR'];
	
	// tworzymy zmienną z zapytaniem SQL
	
	$sql = "insert into ksiega (imie,skad,opinia,wiek,adres_ip,data_godzina)
			values ('$imie','$skad','$opinia','$wiek','$adres_ip',NOW())";
	
	// zapisujemy do bazy
	$zapis = mysqli_query($link, $sql);
	
	// sprawdzamy, czy dane zostały poprawnie dodane
	if (mysqli_error($link)) {
		echo "Wystąpił błąd: " . mysqli_error($link);
	} else {
		echo "Dane zapisane poprawnie.";
	}
	
// jeśli dane nie były przesłane metodą POST, wyświetlamy stosowną informację
} else {
	
	echo "Brak danych do zapisania";
	
}

// zamykamy połączenie do bazy
mysqli_close($link);

?>
<br><br>
<a href="index.php">Powrót</a>