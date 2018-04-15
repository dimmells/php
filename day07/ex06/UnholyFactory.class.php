<?php
class UnholyFactory {
	public $absorbed = array();
	
	public function absorb($it) {
		$is_absorbed = false;
		foreach ($this->absorbed as $key => $value) {
			if ($it->name == $key) {
				$is_absorbed = true;
			}
		}
		if (get_parent_class($it) == false) {
			print ("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
		}
		else if ($is_absorbed == false) {
			print ("(Factory absorbed a fighter of type " . $it->name .")" . PHP_EOL);
			$this->absorbed = array_merge($this->absorbed, array($it->name => get_class($it)));
		}
		else {
			print("(Factory already absorbed a fighter of type " . $it->name . ")" . PHP_EOL);
		}
	}
	public function fabricate($rf) {
		foreach ($this->absorbed as $key => $value) {
			if ($key == $rf) {
				print("(Factory fabricates a fighter of type " . $key . ")" . PHP_EOL);
				return (new $value);
			}
		}
		print("(Factory hasn't absorbed any fighter of type " . $rf . ")" . PHP_EOL);
	}
}
?>