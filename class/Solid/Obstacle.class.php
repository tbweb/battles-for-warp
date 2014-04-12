<?php
abstract class Obstacle extends Solid{

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Obstacle.doc.txt"))
			$file = file_get_contents("./Obstacle.doc.txt");
		return ($file);
	}
}
?>
