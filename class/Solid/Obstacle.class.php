<?php
class Obstacle extends Solid
{
	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Obstacle.doc.txt"))
			$file = file_get_contents("./Obstacle.doc.txt");
		return ($file);

	function __construct()
	{
		$sxy[0]=rand(5, 15);
		$sxy[1]=rand(10, 140);
		$sxy[2]=rand(10, 90);
		return $sxy;
	}
}
?>
