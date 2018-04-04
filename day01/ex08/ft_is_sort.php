#!/usr/bin/php
<?php
function ft_is_sort($arr) {
	$sort = $arr;
	$rsort = $arr;
	sort($sort);
	rsort($rsort);
	if ($sort === $arr || $rsort === $arr)
		return (1);
	else
		return (0);
}
?>