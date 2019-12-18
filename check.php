<?php

	require_once( 'vendor/autoload.php' );

	require_once( 'vendor/PHPGangsta/GoogleAuthenticator.php' );

	$auth = new GoogleAuthenticator();

	$secret_code = $_POST["secretcode"];

	$check_code = $_POST["code"];

	$result = $auth->verifyCode( $secret_code, $check_code, 0 );

	if( $result ){

		echo "Codigo valido";

	}else{

		echo "Codigo invalido";

	}

?>
