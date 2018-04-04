#!/usr/bin/php
<?php
if ($argc > 1) {
	$len = 0;
	while ($argv[1][$len])
		$len++;
	$len--;
	while ($argv[1][$len] == " ")
		$len--;
	$i = 0;
	$space = 1;
	while ($i < $len + 1) {
		if ($argv[1][$i] == ' ' && $space == 0) {
			$space++;
			echo " ";
		}
		if ($argv[1][$i] != ' ') {
			$space = 0;
			echo $argv[1][$i];
		}
		$i++;
	}
	echo "\n";
}
?>
