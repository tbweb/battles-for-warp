<?php

require_once 'Position.class.php';

class Physics{
	private		$_pos;
	private 	$_w;
	private		$_h;
	private		$_life;

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Physics.doc.txt"))
			$file = file_get_contents("./Physics.doc.txt");
		return ($file);
	}

	public function set_pos($p)	{ $this->_pos = $p; }
	public function get_pos()	{ return $this->_pos; }
	public function getLife() {
		return $this->_life;
	}
	public function setLife($_life) {
		$this->_life = $_life;
		return $this;
	}
	
	public function set_w($w)	{ $this->_w = $w; }
	public function get_w()	{ return $this->_w; }
	public function set_h($h)	{ $this->_h = $h; }
	public function get_h()	{ return $this->_h; }
}
?>
