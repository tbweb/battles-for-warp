<?php
class Ship extends Solid
{
	private				$_id = 1;
	private				$_name = "Aurora Class";
	private				$_size = "5x1";
	private				$_pc = 10;
	private				$_pm = 15;
	private				$_speed = 15;
	private				$_move = 4;
	private				$_shield = 0;
	private				$_bonus = '';
	private				$_id_weapon1 = 3;
	private				$_id_weapon2 = 0;
	private				$_id_race = 2;
	private				$image = '../../sprites/Eldars/Cruiser_eldars.png';

	public function __construct($id)
	{
		//if ($id)
			//request for find elem in database;
	}

	public static function doc() {
		$file = "No documentation for this class.";
		if (file_exists("./Ship.doc.txt"))
			$file = file_get_contents("./Ship.doc.txt");
		return ($file);
	}
	public function getId() {
		return $this->_id;
	}
	public function setId($_id) {
		$this->_id = $_id;
		return $this;
	}
	public function getName() {
		return $this->_name;
	}
	public function setName($_name) {
		$this->_name = $_name;
		return $this;
	}
	public function getSize() {
		return $this->_size;
	}
	public function setSize($_size) {
		$this->_size = $_size;
		return $this;
	}
	public function getPc() {
		return $this->_pc;
	}
	public function setPc($_pc) {
		$this->_pc = $_pc;
		return $this;
	}
	public function getPm() {
		return $this->_pm;
	}
	public function setPm($_pm) {
		$this->_pm = $_pm;
		return $this;
	}
	public function getSpeed() {
		return $this->_speed;
	}
	public function setSpeed($_speed) {
		$this->_speed = $_speed;
		return $this;
	}
	public function getMove() {
		return $this->_move;
	}
	public function setMove($_move) {
		$this->_move = $_move;
		return $this;
	}
	public function getShield() {
		return $this->_shield;
	}
	public function setShield($_shield) {
		$this->_shield = $_shield;
		return $this;
	}
	public function getBonus() {
		return $this->_bonus;
	}
	public function setBonus($_bonus) {
		$this->_bonus = $_bonus;
		return $this;
	}
	public function getIdWeapon1() {
		return $this->_id_weapon1;
	}
	public function setIdWeapon1($_id_weapon1) {
		$this->_id_weapon1 = $_id_weapon1;
		return $this;
	}
	public function getIdWeapon2() {
		return $this->_id_weapon2;
	}
	public function setIdWeapon2($_id_weapon2) {
		$this->_id_weapon2 = $_id_weapon2;
		return $this;
	}
	public function getIdRace() {
		return $this->_id_race;
	}
	public function setIdRace($_id_race) {
		$this->_id_race = $_id_race;
		return $this;
	}
}
?>
