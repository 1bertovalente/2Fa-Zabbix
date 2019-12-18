<?php

	require_once( 'generate.php' );

?>

<form action="check.php" method="post" autocomplete="off">
	
	<input type="text" name="code" placeholder="Codigo de Seguranca">

	<button>Testar</button>

	<input type="hidden" value="<?php echo $secret_code; ?>" name="secretcode">

</form>
