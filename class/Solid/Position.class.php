<?php
class Position {
	private $_x = -1;
	private $_y = -1;
	private $_dir = 1;

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Position.doc.txt"))
			$file = file_get_contents("./Position.doc.txt");
		return ($file);
	}

	public function get_x()		{ return $this->_x; }
	public function set_x($x)	{ $this->_x = $x; }

	public function get_y()		{ return $this->_y; }
	public function set_y($y)	{ $this->_y = $y; }

	public function get_dir()	{ return $this->_dir; }
	public function set_dir($r)	{ $this->_dir = $r; }
}
?>
