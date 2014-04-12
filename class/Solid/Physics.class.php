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

	public function set_pos($p)	{ $this->_pos = $p; }
	public function get_pos()	{ return $this->_pos; }
}
?>
