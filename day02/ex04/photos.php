#!/usr/bin/php
<?php
function get_name($url) {
	$url = strrev($url);
	preg_match("/.*?(\/)/", $url, $name);
	$name[0] = strrev($name[0]);
	preg_match("/.*(?=\?)/", $name[0], $name_2);
	if ($name_2[0])
		return ($name_2[0]);
	else
		return ($name[0]);
}
function download($tag_img, $address) {
	preg_match_all("/(?<=src=\").*?(?=\")/", $tag_img, $url, PREG_PATTERN_ORDER);
	 foreach ($url as $el) {
	 	foreach ($el as $elem) {
		 	if (preg_match("/http/", $elem)) {
		 		preg_match("/(?<=\/\/).*/", $address, $www);
		 		$address = $www[0] . "/";
		 		if (!is_dir($address))
		 			mkdir($address, 0777, true);
		 		$path = "./" . $address . get_name($elem);
		 		$ch = curl_init($elem);
				$fp = fopen($path, 'wb');
				curl_setopt($ch, CURLOPT_FILE, $fp);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_exec($ch);
				curl_close($ch);
				fclose($fp);
		 	}
		}
	}
}
function download_url($url, $address) {
 	if (preg_match("/http/", $url)) {
 		preg_match("/(?<=\/\/).*/", $address, $www);
 		$address = $www[0] . "/";
 		if (!is_dir($address))
 			mkdir($address, 0777, true);
 		$path = "./" . $address . get_name($url);
 		$ch = curl_init($url);
		$fp = fopen($path, 'wb');
		curl_setopt($ch, CURLOPT_FILE, $fp);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_exec($ch);
		curl_close($ch);
		fclose($fp);
 	}
}

if ($argv[1]) {
	$crl = curl_init($argv[1]);
	curl_setopt($crl, CURLOPT_RETURNTRANSFER, $argv[1]);
	$source = curl_exec($crl);
	preg_match_all("/<img.*?>/", $source, $matches, PREG_PATTERN_ORDER);
	foreach ($matches as $value) {
		foreach ($value as $tag_img) {
			download($tag_img, $argv[1]);
		}
	}
	preg_match_all("/(?<=url=\").*?(?=\")/", $source, $matches, PREG_PATTERN_ORDER);
	foreach ($matches as $value) {
		foreach ($value as $tag_img) {
			download_url($tag_img, $argv[1]);
		}
	}
	curl_close($crl);
}
?>