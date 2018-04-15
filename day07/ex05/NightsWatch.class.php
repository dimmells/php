<?php
class NightsWatch {
	public $legion = array();
	
	public function recruit($fighter) {
		array_push($this->legion, $fighter);
		return;
	}
	public function fight() {
		foreach ($this->legion as $fighter) {
			if (method_exists($fighter, 'fight')) {
				$fighter->fight();
			}
		}
		return;
	}
}
?>