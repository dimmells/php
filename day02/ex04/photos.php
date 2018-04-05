#!/usr/bin/php
<?php
function get_name($url) {
	$url = strrev($url);
	preg_match("/.*?(\/)/", $url, $name);
	$name[0] = strrev($name[0]);
	return ($name[0]);
}
function download($tag_img, $address) {
	preg_match_all("/(?<=src=\").*?(?=\")/", $tag_img, $url, PREG_PATTERN_ORDER);
	//print_r($url);
	 foreach ($url as $elem) {
	 	if (preg_match("/http?:\/\//", $elem[0])) {
	 		$address = "./" . $address . "/";
	 		mkdir($address, 0777, true);
	 	// 	$path = "/" . $address . get_name($elem[0]);
	 	// 	$ch = curl_init($elem[0]);
			// $fp = fopen($path, 'wb');
			// curl_setopt($ch, CURLOPT_FILE, $fp);
			// curl_setopt($ch, CURLOPT_HEADER, 0);
			// curl_exec($ch);
			// curl_close($ch);
			// fclose($fp);
	 	}
	 }
}
if ($argv[1]) {
	$crl = curl_init($argv[1]);
	curl_setopt($crl, CURLOPT_RETURNTRANSFER, $argv[1]);
	$source = curl_exec($crl);
	preg_match_all("/<img.*?>/", $source, $matches, PREG_PATTERN_ORDER);
	//print_r($matches);
	foreach ($matches as $value) {
		foreach ($value as $tag_img) {
			//print_r($tag_img);
			download($tag_img, $argv[1]);
		}
	}
	curl_close($crl);
}
?>