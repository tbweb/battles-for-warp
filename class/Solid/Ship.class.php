<?php
require_once 'Solid.class.php';
require_once 'Ship/Weapon.class.php';
require_once 'Physics.class.php';

class Ship extends Solid
{
	private				$_id = 1;
	private				$_ship_name = "Aurora Class";
	private				$_name = "Aurora Class";
	private				$_way = "n";
	private				$_x = 10;
	private				$_y = 10;
	private				$_pc = 10;
	private				$_pm = 15;
	private				$_speed = 15;
	private				$_move = 4;
	private				$_shield = 0;
	private				$_bonus = '';
	private				$_weapons = array();
	private				$_id_race = 2;
	private				$_inertia = 0;
	private				$_played = 0;
	private				$image = 'Eldars/Cruiser_eldars.png';

	public function __construct($name)
	{
		$this->_weapons = new Weapon();
		$this->_phy = new Physics();
		$this->_phy->set_pos(new Position(10, 10));
		$this->_ship_name = $name;
		$this->_phy->set_w(1);
		$this->_phy->set_h(5);
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
	public function getShipName() {
		return $this->_ship_name;
	}
	public function setShipName($_ship_name) {
		$this->_ship_name = $_ship_name;
		return $this;
	}
	public function getName() {
		return $this->_name;
	}
	public function setName($_name) {
		$this->_name = $_name;
		return $this;
	}
	public function getWay() {
		return $this->_way;
	}
	public function setWay($_way) {
		$this->_way = $_way;
		return $this;
	}
	public function getX() {
		return $this->_x;
	}
	public function setX($_x) {
		$this->_x = $_x;
		return $this;
	}
	public function getY() {
		return $this->_y;
	}
	public function setY($_y) {
		$this->_y = $_y;
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
	public function getWeapons() {
		return $this->_weapons;
	}
	public function setWeapons($_weapons) {
		$this->_weapons = $_weapons;
		return $this;
	}
	public function getIdRace() {
		return $this->_id_race;
	}
	public function setIdRace($_id_race) {
		$this->_id_race = $_id_race;
		return $this;
	}
	public function getInertia() {
		return $this->_inertia;
	}
	public function setInertia($_inertia) {
		$this->_inertia = $_inertia;
		return $this;
	}
	public function getPlayed() {
		return $this->_played;
	}
	public function setPlayed($_played) {
		$this->_played = $_played;
		return $this;
	}
	public function getImage() {
		return $this->image;
	}
	public function setImage($image) {
		$this->image = $image;
		return $this;
	}
}
?>
