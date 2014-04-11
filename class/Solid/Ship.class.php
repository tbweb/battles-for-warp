<?php
include 'Ship/Motor.class.php';
include 'Ship/Weapon.class.php';
abstract class Ship extends Solid{
	private Weapon array	$_weapons[];
	private Motor			$_motor;
	private	Shield			$_shield;
	private int				$_pp = 0;
}
?>