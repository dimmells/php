#!/usr/bin/php
<?php
function ft_split($str) {
	$arr = explode(" ", $str);
	sort($arr);
	while ($arr && $arr[0] == "")
		array_shift($arr);
	return ($arr);
}
?>
