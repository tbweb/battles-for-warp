<?php
include 'Solid/Physics.class.php';
abstract class Solid{
	protected Physics $_phy;

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Solid.doc.txt"))
			$file = file_get_contents("./Solid.doc.txt");
		return ($file);
	}

}
?>
