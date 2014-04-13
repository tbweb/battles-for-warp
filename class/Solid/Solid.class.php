<?php

require_once 'class/Doc.class.php';

abstract class Solid{
	protected  $_phy;

	use Doc;

	public function getPhy() {
		return $this->_phy;
	}
	public function setPhy($_phy) {
		$this->_phy = $_phy;
		return $this;
	}
}
?>
