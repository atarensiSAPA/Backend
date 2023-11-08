<?php
	setcookie('captcha', false);

	function mostrarReCaptcha(){
		if($_COOKIE['intents'] <= 1){
			echo '<script language="javascript">document.getElementsByClassName("g-recaptcha")[0].removeAttribute("hidden");</script>';
			setcookie('intents', 3);
		}else{
			echo '<script language="javascript">document.getElementsByClassName("g-recaptcha")[0].setAttribute("hidden", "true");</script>';
		}
	}
	
	if(isset($_POST['login'])){
		function reCaptcha(){
			$captcha = $_POST['g-recaptcha-response'];
		
			$secret = '6LetJAEpAAAAAIf7RRyARTzgGlvxnXT5Dd3FZ5Ih';
			
			
			if(!$captcha){
				
				} else {
				
				$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
				
				$arr = json_decode($response, TRUE);
				
				if($arr['success'])
				{
					setcookie('captcha', true);
					setcookie('intents', 3);
					return true;
					} else {
					return false;
				}
			}
		}
	}
?>