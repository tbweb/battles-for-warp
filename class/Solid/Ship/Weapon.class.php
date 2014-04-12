<?php
include 'Area.class.php';
abstract class Weapon {
	private int			$_base_charges = 0;
	private int			$_charges = 0;
	private int			$_boost = 0;
	private Area 		$_zone;

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Weapon.doc.txt"))
			$file = file_get_contents("./Weapon.doc.txt");
		return ($file);
	}

	public function add_scope($dice, $dist)
	{
		$this->$_zone->add_scope($dice, $dist);
	}

	public function shoot_target($dice, $from, $to)
	{
		if (($ret = $this->in_range()))
		{
			if ($dice >= $ret)
			{
				if ($this->_boost > 0)
					$this->_boost--;
				elseif ($this->_charges > 0)
					$this->_charges--;
				return (true);
			}
			else
				return (false);
		}
	}

	public function in_range($from, $to)
	{
		$angle = arcos(($to->get_x()-$from->get_x())/(sqrt(pow($to->get_x()-$from->get_x(), 2)+pow($to->get_y()-$from->get_y(), 2))))
		$angle = 180 * ($angle) / pi();
		$dist = sqrt(pow($to->get_x() - $from->get_x()) + pow($to->get_y() - $from->get_y()));
		if ($this->_zone->get_dir() > -1)
		{
			$wlimit = $this->_zone->get_angle();
			$wnormal = (($from->get_dir() + $this->_zone->get_dir()) % 4) * 90;
			if (in_angle($angle, $wnormal, $wlimit))
			{
				foreach ($this->_zone->get_scope() as $key => $range) {
					if ($dist <= $range)
						return ($key);
				}
				return (0);
			}
			else
				return (0);
		}
		foreach ($this->_zone->get_scope() as $key => $range) {
			if ($dist <= $range)
				return ($key);
		}
		return (0);
	}
	private function in_angle($angle, $normal, $limit)
	{
		$limitleft = (($wnormal + $wlimit) < 0) ? 360 - ($wnormal + $wlimit) : ($wnormal + $wlimit);
		$limitright = (($wnormal - $wlimit) < 0) ? 360 - ($wnormal + $wlimit) : ($wnormal + $wlimit);
		$limitleft %= 360;
		$limitright %= 360;
		if ($angle > $limitright && $angle < $limitleft)
		{
			return (true);
		}
		return (false);
	}
}
?>
