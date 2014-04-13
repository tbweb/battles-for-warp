<?php

require_once 'class/Doc.class.php';

class Position {
	private $_x = -1;
	private $_y = -1;
	private $_dir = 1;

	use Doc;

	public function getX()			{ return $this->_x; }
	public function setX($x)		{ $this->_x = $x; }

	public function getY()			{ return $this->_y; }
	public function setY($y)		{ $this->_y = $y; }

	public function getDir()		{ return $this->_dir; }
	public function setDir($r)		{ $this->_dir = $r; }

	public function __construct ($x, $y)
	{
		$this->_x = $x;
		$this->_y = $y;
	}
}

?>
