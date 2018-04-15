<?php
Class Color {
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	public static $verbose = False;

	public function __construct(array $color) {
		if (array_key_exists('red', $color)) {
			$this->red = $color['red'];
		}
		if (array_key_exists('green', $color)) {
			$this->green = $color['green'];
		}
		if (array_key_exists('blue', $color)) {
			$this->blue = $color['blue'];
		}
		if (array_key_exists('rgb', $color)) {
			$this->parse_rgb($color['rgb']);
		}
		if (self::$verbose) {
			printf ('Color( red: %3d, green: %3d, blue: %3d ) constructed.', $this->red, $this->green, $this->blue);
			print(PHP_EOL);
		}
		return;
	}

	private function parse_rgb($color) { 
    	$this->red = ( $color >> 16 ) & 0xFF;
   		$this->green = ( $color >> 8 ) & 0xFF;
    	$this->blue = $color & 0xFF;
    	return;
	}

	public function __toString() {
		return sprintf ('Color( red: %3d, green: %3d, blue: %3d )', $this->red, $this->green, $this->blue);
	}

	public function add( Color $rhs ) {
		return (new Color( array( 'red' => $this->red + $rhs->red, 'green' => $this->green + $rhs->green,
			'blue' =>$this->blue + $rhs->blue)));
	}

	public function sub( Color $rhs ) {
		return (new Color( array( 'red' => $this->red - $rhs->red, 'green' => $this->green - $rhs->green,
			'blue' =>$this->blue - $rhs->blue)));
	}

	public function mult( $f ) {
		return (new Color( array( 'red' => $this->red * $f, 'green' => $this->green * $f,
			'blue' =>$this->blue * $f)));
	}

	public static function doc() {
		return file_get_contents('Color.doc.txt');
	}

	public function __destruct() {
		if (self::$verbose) {
			printf ('Color( red: %3d, green: %3d, blue: %3d ) destructed.', $this->red, $this->green, $this->blue);
			print(PHP_EOL);
		}
		return;
	}
}
?>