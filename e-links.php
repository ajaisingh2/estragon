<?php
		$url = "http://seosem.org.es/clientes/include.php?key=303"; 
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$body = curl_exec($ch); 
		curl_close($ch); 

		$results = utf8_encode($body);
		
		echo $results;
?>;