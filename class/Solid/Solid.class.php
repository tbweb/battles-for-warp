<?php

abstract class Solid{
	protected  $_phy;

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Solid.doc.txt"))
			$file = file_get_contents("./Solid.doc.txt");
		return ($file);
	}
	public function getPhy() {
		return $this->_phy;
	}
	public function setPhy($_phy) {
		$this->_phy = $_phy;
		return $this;
	}
}
?>
