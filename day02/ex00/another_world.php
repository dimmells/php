#!/usr/bin/php
<?php
if ($argc > 1) {
	$string = $argv[1];
	preg_match_all('/[^ \t]*/', $string, $matches);
	$count = 0;
	foreach ($matches[0] as $elem) {
		if ($elem) {
			if ($count > 0)
				echo " ";
			echo $elem;
			$count++;
		}
	}
	echo "\n";
}
?>