<?php
class Player{
	private $name = "";
	private $race = "";

	public function __construct($name, $race)
	{
		$this->name = $name;
		$this->race = $race;
	}
	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
		return $this;
	}
	public function getRace() {
		return $this->race;
	}
	public function setRace($race) {
		$this->race = $race;
		return $this;
	}
}
?>