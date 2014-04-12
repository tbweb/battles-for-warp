<?php
include 'Ship/Motor.class.php';
include 'Ship/Shield.class.php';
include 'Ship/Weapon.class.php';
abstract class Ship extends Solid{
	protected Weapon array	$_weapons[];
	protected Motor			$_motor;
	protected Shield		$_shield;
	protected int			$_pp = 0;

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Ship.doc.txt"))
			$file = file_get_contents("./Ship.doc.txt");
		return ($file);
	}
}
?>
