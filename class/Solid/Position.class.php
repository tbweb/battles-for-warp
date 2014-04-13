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

	public function getX()			{ return $this->_x; }
	public function setX($x)		{ $this->_x = $x; }

	public function getY()			{ return $this->_y; }
	public function setY($y)		{ $this->_y = $y; }

	public function getDir()		{ return $this->_dir; }
	public function setDir($r)		{ $this->_dir = $r; }

	public function __construct (int $x, int $y)
	{
		$this->_x = $x;
		$this->_y = $y;
	}
}
?>
