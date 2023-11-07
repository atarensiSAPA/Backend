<?php
	
	if(isset($_POST['submit'])){
		$captcha = $_POST['g-recaptcha-response'];
		
		$secret = '6LetJAEpAAAAAIf7RRyARTzgGlvxnXT5Dd3FZ5Ih';
        //$
		
		if(!$captcha){

			echo "Por favor verifica el captcha";
			
			} else {
			
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
			
			$arr = json_decode($response, TRUE);
			
			if($arr['success'])
			{
				echo '<h2>Thanks</h2>';
				} else {
				echo '<h3>Error al comprobar Captcha </h3>';
			}
		}
	}
?>