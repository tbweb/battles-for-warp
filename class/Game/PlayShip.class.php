<?php

require_once 'class/Doc.class.php';

class PlayShip
{
	private				$_id = 1;
	private				$_id_game = 1;
	private				$_id_player = 0;
	private				$_id_ship = 5;
	private				$_ship;
	private				$_ship_name = "Aurora Class";
	private				$_way = "n";
	private				$_x = 10;
	private				$_y = 10;
	private				$_pc = 10;
	private				$_shield;
	private				$_inertia;
	private				$_played;
	public static		$verbose = FALSE;

	use Doc;

	public function __construct($name, $x, $y)
	{
		$this->_ship_name = $name;
		$this->_ship = new Ship(1);
		$this->_pc = $this->_ship->getPc();
	}

	public function getId() {
		return $this->_id;
	}

	public function setId($_id) {
		$this->_id = $_id;
		return $this;
	}

	public function getIdGame() {
		return $this->_id_game;
	}

	public function setIdGame($_id_game) {
		$this->_id_game = $_id_game;
		return $this;
	}

	public function getIdPlayer() {
		return $this->_id_player;
	}

	public function setIdPlayer($_id_player) {
		$this->_id_player = $_id_player;
		return $this;
	}

	public function getIdShip() {
		return $this->_id_ship;
	}

	public function setIdShip($_id_ship) {
		$this->_id_ship = $_id_ship;
		return $this;
	}

	public function getShip() {
		return $this->_ship;
	}

	public function setShip($_ship) {
		$this->_ship = $_ship;
		return $this;
	}

	public function getShipName() {
		return $this->_ship_name;
	}

	public function setShipName($_ship_name) {
		$this->_ship_name = $_ship_name;
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

	public function getShield() {
		return $this->_shield;
	}

	public function setShield($_shield) {
		$this->_shield = $_shield;
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

}
?>
