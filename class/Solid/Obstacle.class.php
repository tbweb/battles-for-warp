<?php
class Obstacle extends Solid
{
	function __construct()
	{
		$sxy[0]=rand(5, 15);
		$sxy[1]=rand(10, 140);
		$sxy[2]=rand(10, 90);
		return $sxy;
	}
}
?>
