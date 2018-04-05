#!/usr/bin/php
<?php
if ($argv[1]) {
	$page = file_get_contents($argv[1]);
	
	$res = preg_replace_callback("/(?<=<a).*?(<\/a>)/si",
		function ($in_tag) {
			$rc = preg_replace_callback("/(?<=title=\").*?(?=\")/si",
			function ($matches) {
				return (strtoupper($matches[0]));
			}, $in_tag[0]);
			return ($rc);
		}, $page);
	$res = preg_replace_callback("/(?<=<a).*?(<\/a>)/si",
		function ($in_tag) {
			$rc = preg_replace_callback("/(?<=>)[^<].*?[^>](?=<)/si",
			function ($matches) {
				return (strtoupper($matches[0]));
			}, $in_tag[0]);
			return ($rc);
		}, $res);
	echo $res;
}
?>