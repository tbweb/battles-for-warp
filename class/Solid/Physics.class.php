<?php

require_once 'Position.class.php';
require_once 'class/Doc.class.php';

class Physics{
	private		$_pos;
	private 	$_w;
	private		$_h;
	private		$_life;

	use Doc;

	public function setPos($p)	{ $this->_pos = $p; }
	public function getPos()	{ return $this->_pos; }

	public function setW($v)	{ $this->_w = $v;}
	public function getW()		{ return $this->_w; }

	public function setH($v)	{ $this->_h = $v; }
	public function getH()		{ return $this->_h; }

	public function getLife() {
		return $this->_life;
	}
	public function setLife($_life) {
		$this->_life = $_life;
		return $this;
	}
}

?>
