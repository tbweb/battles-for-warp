<?php
include 'Area.class.php';
abstract class Weapon{
	private int			$_charges = 0;
	private Area 		$_zone;
	private array		$_scope;

	public function get_zone()	{return ($_zone);}

	public function add_scope($dice, $dist)
	{
		$this->_scope[$dice] = $dist;
	}

	public function hit_target($dist, $dice)
	{
		foreach ($this->_scope as $key => $range) {
			if ($dice <= $key)
				return (true);
		}
	}
}
?>