<?php
include 'Area.class.php';
abstract class Weapon{
	private int			$_charges = 0;
	private Area 		$_zone;

	public function get_zone()	{return ($_zone);}

	public function add_scope($dice, $dist)
	{
		$this->$_zone->add_scope($dice, $dist);
	}

	public function hit_target($dice, $dist)
	{
		foreach ($this->$_zone->_scope as $key => $range) {
			if ($dice <= $key)
				return (true);
		}
	}
}
?>