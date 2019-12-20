<?php

	require_once( 'vendor/autoload.php' );

	require_once( 'vendor/PHPGangsta/GoogleAuthenticator.php' );

	$auth = new GoogleAuthenticator();

	$secret_code = $auth->createSecret();

	$website = "http://localhost/teste-zabbix/";
	$titulo = "Zabbix";
	$url_qr_code = $auth->getQRCodeGoogleUrl( $titulo, $secret_code, $website );

	echo "<img src='".$url_qr_code."' /> \n";

?>
