#!/usr/bin/php
<?php
date_default_timezone_set("Europe/Kiev");
$fd = fopen("/var/run/utmpx", 'r');
while ($data = fread($fd, 628)) {
	$info = unpack("a256user/a4id/a32line/ipid/itype/Itime", $data);
	if ($info[type] == 7)
		print "$info[user]  $info[line]  ".date('M  j H:i', $info[time])."\n";
}
?>