<?php
class Area {
	private int		$_dir = 0;
	private array	$_scope;
	private int		$_angle = 360;

	public function set_scope($dice, $dist)
	{
		$this->_scope[$dice] = $dist;
	}
	public function set_angle($angle)
	{
		$this->_angle = $angle % 360;
	}
}
?>