<?php
class Motor{
	private int		$_speed = 0;
	private int		$_boost = 0;
	private int		$_manover = 5;

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Motor.doc.txt"))
			$file = file_get_contents("./Motor.doc.txt");
		return ($file);
	}

	public function set_speed($s)		{$this->_speed = $s;}
	public function set_manover($m)		{$this->_manover = $m;}
	public function get_speed()			{return ($this->_speed) + ($this->_boost);}
	public function get_manover()		{return ($this->_manover);}
}
?>
