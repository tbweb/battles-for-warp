<?php
class Motor{
	private int		$_speed = 0;
	private int		$_boost = 0;
	private int		$_manover = 5;

	public function set_speed($s)		{$this->_speed = $s;}
	public function set_manover($m)		{$this->_manover = $m;}
	public function get_speed()			{return ($this->_speed) + ($this->_boost);}
	public function get_manover()		{return ($this->_manover);}
}
?>