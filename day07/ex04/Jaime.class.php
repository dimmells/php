<?php
class Jaime extends Lannister {
	public function sleepWith($it) {
		if (get_class($it) == "Tyrion") {
			print ("Not even if I'm drunk !" . PHP_EOL);
		}
		else if (get_class($it) == "Sansa") {
			print ("Let's do this." . PHP_EOL);
		}
		else if (get_class($it) == "Cersei") {
			print ("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		}
	}
}
?>