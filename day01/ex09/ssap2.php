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
	echo $a;
	if (($a[0] >= 'a' && $a[0] <= 'z') && ($b[0] >= 'a' && $b[0] <= 'z'))
		if ($a < $b)
			return (-1);
		else if ($a > $b)
			return (1);
		else
			return (0);
		//return ($a < $b) ? -1 : 1;
	//else if (($a[0] >= 'a' && $a[0] <= 'z') && !($b[0] >= 'a' && $b[0] <= 'z'))
	//	return (1);
	//else if (!($a[0] >= 'a' && $a[0] <= 'z') && ($b[0] >= 'a' && $b[0] <= 'z'))
	//	return (-1);
	/*else if (($a[0] >= '0' && $a[0] <= '9') && ($b[0] >= 'a' && $b[0] <= 'z'))
		return (-1);
	else if (($a[0] >= 'a' && $a[0] <= 'z') && ($b[0] >= '0' && $b[0] <= '9'))
		return (-1);
	else if (($a[0] >= '0' && $a[0] <= '9') && ($b[0] >= '0' && $b[0] <= '9'))
		return ($a < $b) ? -1 : 1;
	else if (($a[0] < '0' && $a[0] > '9') && ($a[0] < 'a' && $a[0] > 'z') &&
		($b[0] >= '0' && $b[0] <= '9') || ($b[0] >= 'a' && $b[0] <= 'z'))
		return (-1);
	else if (($b[0] < '0' && $b[0] > '9') && ($b[0] < 'a' && $b[0] > 'z') &&
		($a[0] >= '0' && $a[0] <= '9') || ($a[0] >= 'a' && $a[0] <= 'z'))
		return (1);
	else if (($a[0] < '0' && $a[0] > '9') && ($a[0] < 'a' && $a[0] > 'z') &&
		($b[0] < '0' && $b[0] > '9') && ($b[0] < 'a' && $b[0] > 'z'))
		return ($a < $b) ? -1 : 1;*/
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
//usort($array, "priority");
$alph = array("");
$num = array("");
$symb = array("");
$j = 1;
while ($array[$j]) {
	if (($array[$j][0] >= 'a' && $array[$j][0] <= 'z') || ($array[$j][0] >= 'A' && $array[$j][0] <= 'Z'))
		array_push($alph, $array[$j]);
	else if ($array[$j][0] >= '0' && $array[$j][0] <= '9')
		array_push($num, $array[$j]);
	else
		array_push($symb, $array[$j]);
	$j++;
}
usort($alph, "priority");
print_r($alph);
?>