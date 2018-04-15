<?php
class Targaryen {
	public function getBurned() {
		if (method_exists($this, 'resistsFire')) {
			if (static::resistsFire()) {
				return "emerges naked but unharmed";
			}
			else {
				return "burns alive";
			}
		}
		else {
			return "burns alive";
		}
	}
}
?>