<?php
if ($_SERVER['PHP_AUTH_USER'] != "zaz" || $_SERVER['PHP_AUTH_PW'] != "jaimelespetitsponeys") {
	header('WWW-Authenticate: Basic realm="My Realm"');
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>That area is accessible for members only</body></html>\n";
}
else
{
	$img=file_get_contents('../img/42.png');
	$img=base64_encode($img);
	echo "<html><body>\n";
	echo "Hello Zaz<br />\n";
	echo "<img src='data:image/png;base64," . $img . "'>\n";
	echo "</body></html>\n";
}
?>