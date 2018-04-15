<?php
foreach ($_GET as $key => $value) {
	if ($key === "action") {
		$action = $value;
	}
	if ($key === "name") {
		$name = $value;
	}
	if ($key === "value") {
		$val = $value;
	}
}
if ($action === "set") {
	setcookie($name, $value, time()+60*60*24*30);
}
if ($action === "get") {
	if ($_COOKIE[$name])
		echo $_COOKIE[$name] . "\n";
}
if ($action === "del") {
	setcookie($name, "", time()-3600);
}
?>