#!/usr/bin/php
<?php
function ft_split($str) {
	$arr = explode(" ", $str);
	sort($arr);
	while ($arr && $arr[0] == "")
		array_shift($arr);
	return ($arr);
}
$array = array("");
$i = 1;
while ($argv[$i]) {
	$split = ft_split($argv[$i]);
	$j = 0;
	while ($split[$j]) {
		array_push($array, $split[$j]);
		$j++;
	}
	$i++;
}
sort($array);
$j = 1;
while ($array[$j]) {
	echo $array[$j];
	echo "\n";
	$j++;
}
?>