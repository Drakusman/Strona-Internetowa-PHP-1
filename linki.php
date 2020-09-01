
			
			<h1>Linki</h1>
			
			<?php
			
				// tworzymy tablicę, gdzie indeksem jest URL, a wartością opis strony			
				$linki = array(
					"http://www.onet.pl"=>"Portal Onet.pl",
					"http://www.android.com.pl"=>"Portal Android.com.pl",
					"http://www.google.pl"=>"Wyszukiwarka Google",
					"http://www.php.net"=>"Strona projektu PHP");
			
			?>
			
			<ul>
			
				<?php
				
					// pętla po tablicy
					foreach ($linki as $url=>$opis) {
						
						echo '<li><a href="'.$url.'" target="_blank">'.$opis.'</a></li>';
						
					}
				
				?>
			
			
			</ul>
