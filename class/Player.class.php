<?php

require_once("Doc.class.php");

class Player
{
	private $_id_player = 1;
	private $_name = "";
	private $_pwdCrypt = "";
	private $_race = "";
	private $_id_game;
	private $_playship;

	use Doc;

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Player.doc.txt"))
			$file = file_get_contents("./Player.doc.txt");
		return ($file);
	}

	public function __construct($name, $race, $pwdCrypt)
	{
		$this->_name = $name;
		$this->_pwdCrypt = hash("whirlpool", $pwdCrypt);
		$this->_race = $race;
		$this->_playship = new Ship($name . " ship", 10, 10);
	}

	public function getName() {
		return $this->_name;
	}

	public function setName($name) {
		$this->_name = $name;
		return $this;
	}

	public function getRace() {
		return $this->_race;
	}

	public function setRace($race) {
		$this->_race = $race;
		return $this;
	}

	public function getIdPlayer() {
		return $this->_id_player;
	}

	public function getIdGame() {
		return $this->_id_game;
	}

	public function setIdGame($id_game) {
		$this->_id_game = $id_game;
		return $this;
	}

	public function getPwdcrypt() {
		return $this->_pwdCrypt;
	}

	public function setPwdcrypt($pwdCrypt) {
		$this->_pwdCrypt = $pwdCrypt;
		return $this;
	}
	public function getPlayship() {
		return $this->_playship;
	}
	public function setPlayship($_playship) {
		$this->_playship = $_playship;
		return $this;
	}
}
?>
