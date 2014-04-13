<?php
class Physics{
	private		$_pos = new Position();
	private int	$_w;
	private int	$_h;
	private		$_life;

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Physics.doc.txt"))
			$file = file_get_contents("./Physics.doc.txt");
		return ($file);
	}

	public function setPos($p)	{ $this->_pos = $p; }
	public function getPos()	{ return $this->_pos; }

	public function setW($v)	{ $this->_w = $v;}
	public function getW()		{ return $this->_w; }

	public function setH($v)	{ $this->_h = $v; }
	public function getH()		{ return $this->_h; }
}
?>
