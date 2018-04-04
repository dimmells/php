#!/usr/bin/php
<?php
function ft_split($str) {
	$arr = explode(" ", $str);
	return ($arr);
}
if ($argc > 1)
{
	$rostring = explode(" ", $argv[1]);
	while ($rostring && $rostring[0] == "")
			array_shift($rostring);
	$last = $rostring[0];
	$i = 1;
	$len = count($rostring);
	while ($i < $len)
	{
		if ($rostring[$i] != "") {
			echo $rostring[$i];
			echo " ";
		}
		$i++;
	}
	if ($last) {
		echo $last;
		echo "\n";
	}
}
?>