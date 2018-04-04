#!/usr/bin/php
<?php
function ft_split($str) {
	$arr = explode(" ", $str);
	sort($arr);
	while ($arr && $arr[0] == "")
		array_shift($arr);
	return ($arr);
}
function priority($a, $b) {
	$a = strtolower($a);
	$b = strtolower($b);
	$i = 0;
	$j = 0;
	while ($a[$i] && $b[$i]) {
		if (($a[$i] >= 'a' && $a[$i] <= 'z') && ($b[$j] >= 'a' && $b[$j] <= 'z')) {
			if ($a[$i] > $b[$j])
				return (1);
			else if ($a[$i] < $b[$j])
				return (-1);
		}
		if (($a[$i] >= '0' && $a[$i] <= '9') && ($b[$j] >= '0' && $b[$j] <= '9')) {
			if ($a[$i] > $b[$j])
				return (1);
			else if ($a[$i] < $b[$j])
				return (-1);
		}
		if (($a[$i] < '0' || $a[$i] > '9') && ($a[$i] < 'a' || $a[$i] > 'z') && ($b[$j] < '0' || $b[$j] > '9') && ($b[$j] < 'a' || $b[$j] > 'z')) {
			if ($a[$i] > $b[$j])
				return (1);
			else if ($a[$i] < $b[$j])
				return (-1);
		}
		if (($a[$i] >= 'a' && $a[$i] <= 'z') && ($b[$j] >= '0' && $b[$j] <= '9')) 
			return (-1);
		if (($a[$i] >= '0' && $a[$i] <= '9') && ($b[$j] >= 'a' && $b[$j] <= 'z')) 
			return (1);
		if (($a[$i] >='a' && $a[$i] <= 'z') && ($b[$j] < '0' || $b[$j] > '9') && ($b[$j] < 'a' || $b[$j] > 'z'))
			return (-1);
		if (($b[$j] >='a' && $b[$j] <= 'z') && ($a[$i] < '0' || $a[$i] > '9') && ($a[$i] < 'a' || $a[$i] > 'z'))
			return (1);
		if (($a[$i] >='0' && $a[$i] <= '9') && ($b[$j] < '0' || $b[$j] > '9') && ($b[$j] < 'a' || $b[$j] > 'z'))
			return (-1);
		if (($b[$j] >='0' && $b[$j] <= '9') && ($a[$i] < '0' || $a[$i] > '9') && ($a[$i] < 'a' || $a[$i] > 'z'))
			return (1);
		$i++;
		$j++;
	}
	if ($i == $j)
		return (0);
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
array_shift($array);
usort($array, "priority");
foreach ($array as $elem) {
	echo $elem;
	echo "\n";
}
?>