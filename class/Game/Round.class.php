<?php
	
Class Round
{
	private	$ship;
	private	$speedPp = 0;
	private	$shieldPp = 0;
	private	$weaponPp = 0;
	
	public function getShip() {
		return $this->ship;
	}
	public function setShip($ship) {
		$this->ship = $ship;
		return $this;
	}
	public function getSpeedPp() {
		return $this->speedPp;
	}
	public function setSpeedPp($speedPp) {
		$this->speedPp = $speedPp;
		return $this;
	}
	public function getShieldPp() {
		return $this->shieldPp;
	}
	public function setShieldPp($shieldPp) {
		$this->shieldPp = $shieldPp;
		return $this;
	}
	public function getWeaponPp() {
		return $this->weaponPp;
	}
	public function setWeaponPp($weaponPp) {
		$this->weaponPp = $weaponPp;
		return $this;
	}
}
?>