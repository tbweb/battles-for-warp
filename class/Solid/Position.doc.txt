<?php
class Position {
	Private $_x = -1;
	Private $_y = -1;
	private $_dir = 1;

	public function get_x()		{ return $this->_x; }
	public function set_x($x)	{ $this->_x = $x; }

	public function get_y()		{ return $this->_y; }
	public function set_y($y)	{ $this->_y = $y; }

	public function get_dir()	{ return $this->_dir; }
	public function get_dir($r)	{ $this->_dir = $r; }
}
?>