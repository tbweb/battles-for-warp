<?php

require_once 'class/Doc.class.txt';

Class Round
{
	private	$_ship;
	private	$_speedPp = 0;
	private	$_shieldPp = 0;
	private	$_weaponPp = 0;

	use Doc;

	public function getShip() {
		return $this->_ship;
	}

	public function setShip($ship) {
		$this->_ship = $ship;
		return $this;
	}

	public function getSpeedPp() {
		return $this->_speedPp;
	}

	public function setSpeedPp($speedPp) {
		$this->_speedPp = $speedPp;
		return $this;
	}

	public function getShieldPp() {
		return $this->_shieldPp;
	}

	public function setShieldPp($shieldPp) {
		$this->_shieldPp = $shieldPp;
		return $this;
	}

	public function getWeaponPp() {
		return $this->_weaponPp;
	}

	public function setWeaponPp($weaponPp) {
		$this->_weaponPp = $weaponPp;
		return $this;
	}
}
?>
