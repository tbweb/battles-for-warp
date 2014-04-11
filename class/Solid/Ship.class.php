<?php
include 'Ship/Motor.class.php';
include 'Ship/Shield.class.php';
include 'Ship/Weapon.class.php';
abstract class Ship extends Solid{
	protected Weapon array	$_weapons[];
	protected Motor			$_motor;
	protected Shield		$_shield;
	protected int			$_pp = 0;
}
?>