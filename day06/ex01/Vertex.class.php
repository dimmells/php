<?php
Class Vertex {
	private $_x = 0.0;
	private $_y = 0.0;
	private $_z = 0.0;
	private $_w = 1.0;
	private $_color;
	public static $verbose = False;

	public function getX() {
		return $this->_x;
	}

	public function getY() {
		return $this->_y;
	}

	public function getZ() {
		return $this->_z;
	}

	public function getW() {
		return $this->_w;
	}

	public function getColor() {
		return $this->_color;
	}

	public function setX($v) {
		$this->_x = $v;
		return;
	}

	public function setY($v) {
		$this->_y = $v;
		return;
	}

	public function setZ($v) {
		$this->_z = $v;
		return;
	}

	public function setW($v) {
		$this->_w = $v;
		return;
	}

	public function setColor($v) {
		$this->_color = $v;
		return;
	}

	public function __construct(array $coord) {
		if (array_key_exists('x', $coord)) {
			$this->_x = $coord['x'];
		}
		if (array_key_exists('y', $coord)) {
			$this->_y = $coord['y'];
		}
		if (array_key_exists('z', $coord)) {
			$this->_z = $coord['z'];
		}
		if (array_key_exists('w', $coord)) {
			$this->_w = $coord['w'];
		}
		if (array_key_exists('color', $coord)) {
			$this->_color = $coord['color'];
		}
		else {
			$this->_color = new Color( array( 'rgb' => 0xffffff));
		}
		if (self::$verbose) {
			printf ('Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed', $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
			print(PHP_EOL);
		}
		return;
	}

	public function __toString() {
		if (self::$verbose) {
			return sprintf ('Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) )', $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
		}
		else {
			return sprintf ('Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )', $this->_x, $this->_y, $this->_z, $this->_w);
		}
	}

	public static function doc() {
		return file_get_contents('Vertex.doc.txt');
	}

	public function __destruct() {
		if (self::$verbose) {
			printf ('Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) destructed', $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
			print(PHP_EOL);
		}
		return;
	}
}
?>