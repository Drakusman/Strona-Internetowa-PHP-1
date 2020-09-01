			
			<h1>Księga gości</h1>
			
			
			<p>Zapisz się do księgi gości</p>
			
			<!-- UWAGA: dane wypełnione w formularzu są wysyłane do pliku form.php  -->
			<form action="form.php" method="post">
				
				<p class="malyakapit">Podaj swoje imię</p>
				<input class="text" type="text" name="imie" ><br><br>
				
				<?php
				
					// tablica z wartościami "skąd wiesz o tej stronie"
					$skadWiesz = array('reklama w radiu','reklama w tv','od kolegi','trafiłem w google');
				
				?>
				
				<p class="malyakapit">Skąd wiesz o tej stronie</p>
				<?php
				
					// pętla foreach listuje tablicę
					
					foreach ($skadWiesz as $wartosc) {
						
						echo '<input type="radio" name="skad" value="'.$wartosc.'" >'.$wartosc.'<br>';
						
					}
				
				?>
				<br>
				
				
				<p class="malyakapit">Ile masz lat?</p>
				<select name="wiek">
				
					<?php
					
						// pętla for od 18 do 120
						
						for ($i=18; $i<=120; $i++) {
							
							echo '<option value="' . $i . '">' . $i . '</option>';
							
						}
					
					?>
				
				</select><br><br>
				
				<p class="malyakapit">Napisz co sądzisz o stronie</p>
				<textarea name="opinia"></textarea><br><br>
				
				<input type="submit" class="submit" value="Wyślij!" >
			
			</form>
			

