		
<?php

// tworzymy połączenie do bazy danych: serwer, uzytkownik, haslo, baza danych
// i przypisujemy połączenie do zmiennej $link

$link = mysqli_connect('localhost','zajecia7','zaliczenie123k','zajecia7');

// jeśli coś nie tak z połączeniem, wyświetlamy informację o braku połączenia
if (!$link) {
	
	echo "<h1>Nie udało się połączyć do bazy danych</h1>";
	
}

// ustawiamy kodowanie znakow na utf8
mysqli_set_charset ( $link , 'utf8' );

?>		
		
			<h1>Goście</h1>
			
				<table cellspacing="1" cellpadding="10" border="0">
					<tr>
						<td class="naglowek">Imię</td>
						<td class="naglowek" width="150">Data</td>
						<td class="naglowek">Opinia</td>
						<td class="naglowek">Wiek</td>
						<td class="naglowek">Adres IP</td>
					</tr>
					
					
					<?php
					
						// tworzymy zmienną z zapytaniem SQL
						$sql = "select * from ksiega";
						
						// wysylamy do bazy zapytanie SQL i przypisujemy wynik do zmiennej
						$wynik = mysqli_query($link, $sql);
						
						// tworzymy zmienną pomocniczą do styli w wierszach
						$counter = 0;
						
						// zamieniamy kazdy wiersz z danymi na tablicę PHP za pomocą mysqli_fetch_array
						// petla while dziala dopoki mysqli_fetch_array coś zwraca, czyli dopóki są wiersze w danych
						// w zmiennej $wynik
						while ($wiersz = mysqli_fetch_array($wynik)) {
							
							// wykrywanie czy zmienna counter jest parzysta
							// za pomocą modulo z liczby 2 (zero jeśli po dzieleniu nie ma reszty)
							
							if ($counter%2 == 0) {
								$css = "wiersz1";
							} else {
								$css = "wiersz2";
							}
							
							echo "<tr>";
							
							echo "<td class=$css>" . $wiersz['imie'] . "</td>";
							echo "<td class=$css>" . $wiersz['data_godzina'] . "</td>";
							echo "<td class=$css>" . $wiersz['opinia'] . "</td>";
							echo "<td class=$css>" . $wiersz['wiek'] . "</td>";
							echo "<td class=$css>" . $wiersz['adres_ip'] . "</td>";
							
							echo "</tr>";
							
							// inkrementacja zmiennej pomocnicznej
							$counter++;

							
						}
					
					?>
					
					
				</table>

<?php

// zamknięcie połączenia
mysqli_close($link);

?>