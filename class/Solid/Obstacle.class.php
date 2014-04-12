<?php
class Obstacle extends Solid
{
	function __construct()
	{
		$size=$sxy[0]=rand(5, 15);
		$this->_phy->set_w($size);
		$this->_phy->set_h($size);
		$sxy[1]=rand(10, 140);
		$sxy[2]=rand(10, 90);
		$pos = new Position($size, $size);
		return $sxy;
	}
}
?>