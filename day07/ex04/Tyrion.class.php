<?php
class Tyrion extends Lannister {
	public function sleepWith($it) {
		if (get_class($it) == "Jaime" || get_class($it) == "Cersei") {
			print ("Not even if I'm drunk !" . PHP_EOL);
		}
		else if (get_class($it) == "Sansa") {
			print ("Let's do this." . PHP_EOL);
		}
	}
}
?>