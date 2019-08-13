<?php
	
	$autoload = function($class){
		if($class == 'Email'){
			require('classes/phpmailer/PHPMailerAutoLoad.php');
		}
		include('classes/'.$class.'.php');
		
		/*if($class == 'Email'){
			require_once('classes/phpmailer/PHPMailerAutoLoad.php');
		}
		include('classes/'.$class.'.php');*/
	};

	spl_autoload_register($autoload);

	define('INCLUDE_PATH','http://localhost/ProjetoIDS/');
?>