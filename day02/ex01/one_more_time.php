#!/usr/bin/php
<?php
function check_space_and_count($str, $data) {
	$space = preg_match_all('/ /', $str);
	if (count($data) !== 5 || $space != 4)
		return (0);
	return (1);
}
function check_day_of_week($dow) {
	$dow[0] = strtolower($dow[0]);
	if ($dow === "lundi")
		return (1);
	else if ($dow === "mardi")
		return (1);
	else if ($dow === "mercredi")
		return (1);
	else if ($dow === "jeudi")
		return (1);
	else if ($dow === "vendredi")
		return (1);
	else if ($dow === "samedi")
		return (1);
	else if ($dow === "dimanche")
		return (1);
	else
		return (0);
}
function check_day_of_month($dom) {
	if ($dom >= 1 && $dom <= 31)
		return (1);
	else
		return (0);
}
function check_month($month) {
	$month[0] = strtolower($month[0]);
	if ($month === "janvier")
		return (1);
	else if ($month === "février" || $month === "fevrier")
		return (1);
	else if ($month === "mars")
		return (1);
	else if ($month === "avril")
		return (1);
	else if ($month === "mai")
		return (1);
	else if ($month === "juin")
		return (1);
	else if ($month === "juillet")
		return (1);
	else if ($month === "août" || $month === "aout")
		return (1);
	else if ($month === "septembre")
		return (1);
	else if ($month === "octobre")
		return (1);
	else if ($month === "novembre")
		return (1);
	else if ($month === "décembre" || $month === "decembre")
		return (1);
	else
		return (0);
}
function check_year($year) {
	if ($year >= 1970 && $year <= 9999)
		return (1);
	else
		return (0);
}
function check_time($time) {
	$parse = explode(":", $time);
	if (preg_match('/[0-2][0-9]:[0-5][0-9]:[0-5][0-9]/', $time)) {
		if ($parse[0][0] < 2)
			return (1);
		if ($parse[0][0] === '2' && $parse[0][1] < '4')
			return (1);
		else
			return (0);
	}
	else
		return (0);
}
function check_data($data) {
	if (check_day_of_week($data[0]))
		if (check_day_of_month($data[1]))
			if (check_month($data[2]))
				if (check_year($data[3]))
					if (check_time($data[4]))
						return (1);
	return (0);
}
function get_month($month) {
	$month[0] = strtolower($month[0]);
	if ($month === "février" || $month === "fevrier")
		return (2);
	else if ($month === "mars")
		return (3);
	else if ($month === "avril")
		return (4);
	else if ($month === "mai")
		return (5);
	else if ($month === "juin")
		return (6);
	else if ($month === "juillet")
		return (7);
	else if ($month === "août" || $month === "aout")
		return (8);
	else if ($month === "septembre")
		return (9);
	else if ($month === "octobre")
		return (10);
	else if ($month === "novembre")
		return (11);
	else if ($month === "décembre" || $month === "decembre")
		return (12);
	else
		return (1);
}
if ($argc > 1) {
	$data = explode(" ", $argv[1]);
	if (!check_space_and_count($argv[1], $data) || !check_data($data)) {
		echo "Wrong Format\n";
		exit(1);
	}
	date_default_timezone_set("Europe/Paris");
	$sec = strtotime($data[3]."-".get_month($data[2])."-".$data[1]." ".$data[4]);
	echo "$sec\n";
}
?>