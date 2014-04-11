<?php
include 'Ship/Motor.class.php';
include 'Ship/Shield.class.php';
include 'Ship/Weapon.class.php';
abstract class Ship extends Solid{
	private Weapon $_weapons[];
	private Shield $_shield;
	private Motor $_motor;
}
?>