<?php
class Shield {
	private int	$_shield = 0;
	private int	$_boost = 0;

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Shield.doc.txt"))
			$file = file_get_contents("./Shield.doc.txt");
		return ($file);
	}

	public function add_boost($pp)
	{
		$this->_boost += $pp;
	}
	public function get_shield()
	{
		return ($this->_shield + $this->_boost);
	}
	public function take_damage($dmg)
	{
		$diff =  $dmg - $this->_boost;
		if ($diff <= 0)
		{
			$this->_boost -= $dmg;
			return (0);
		}
		else
		{
			$diff = $diff - $this->_shield;
			if ($diff <= 0)
				return (0);
			else
				return ($diff);
		}
	}
}
?>
