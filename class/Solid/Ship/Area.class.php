<?php

require_once 'class/Doc.class.php';

class Area {
	private		$_dir;
	private		$_scope;
	private		$_angle;

	use Doc;

	public function __construct($dir, $angle)
	{
		$this->_dir = $dir;
		$this->_angle = $angle;
	}

	public function set_scope($dice, $dist)	{ $this->_scope[$dice] = $dist; }
	public function set_angle($angle)		{ $this->_angle = $angle % 360; }
	public function get_angle()				{ return $this->_angle; }
	public function get_dir()				{ return $this->_dir; }
}

?>
