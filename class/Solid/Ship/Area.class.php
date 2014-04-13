<?php
class Area {
	private		$_dir;
	private		$_scope;
	private		$_angle;

	public function __construct($dir, $angle)
	{
		$this->_dir = $dir;
		$this->_angle = $angle;
	}
	
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
