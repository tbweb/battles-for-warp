<?php
class Obstacle extends Solid
{
}
funtion stockObstacle()
{
	$sxy[0]=rand(5, 15);
	$sxy[1]=rand(10, 140);
	$sxy[2]=rand(10, 90);
	return $sxy;
}
function buildObstacleSet()
{
		$i = 0;
	$maxObs= rand(5, 10);
	while(i <$maxObs)
	{
	$bunchObstacles[$i] = $this->stockObstacle();
	}
	return $bunchObstacles;
}
?>
