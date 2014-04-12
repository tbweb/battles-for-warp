<?php
class Area {
	private int		$_dir = -1;
	private array	$_scope;
	private int		$_angle = 360;

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Area.doc.txt"))
			$file = file_get_contents("./Area.doc.txt");
		return ($file);
	}

	public function set_scope($dice, $dist)	{ $this->_scope[$dice] = $dist; }
	public function set_angle($angle)		{ $this->_angle = $angle % 360; }
	public function get_angle()				{ return $this->_angle; }
	public function get_dir()				{ return $this->_dir; }
}
?>
