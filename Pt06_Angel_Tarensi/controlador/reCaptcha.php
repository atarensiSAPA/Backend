<?php
//Angel Tarensi

//funció per mostrar el reCaptcha si l'usuari ha fallat 3 cops
function mostrarReCaptcha(){
	if($_COOKIE['intents'] <= 1){
		echo '<script language="javascript">document.getElementsByClassName("g-recaptcha")[0].removeAttribute("hidden");</script>';
	}else{
		echo '<script language="javascript">document.getElementsByClassName("g-recaptcha")[0].setAttribute("hidden", "true");</script>';
	}
}

//funció per comprovar el reCaptcha i retornar true o false
if(isset($_POST['login'])){
	function reCaptcha(){
		$captcha = $_POST['g-recaptcha-response'];
	
		$secret = '6LetJAEpAAAAAIf7RRyARTzgGlvxnXT5Dd3FZ5Ih';
		
		
		if(!$captcha){
			
			} else {
				$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
				
				$arr = json_decode($response, TRUE);
				
				if($arr['success']){
					setcookie('intents', 3);
					return true;
				} else {
					return false;
				}
			}
	}
}
?>