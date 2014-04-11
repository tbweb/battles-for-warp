<?php

require_once 'class/Player.class.php';

class Game
{
	private $__player1;
	private $__player2;
	private $_informations;
	public static $verbose = FALSE;
	
	public function __construct($player1, $player2, $racePlayer1, $racePlayer2)
	{
		$this->_player1 = new Player($player1, $racePlayer1);
		$this->_player2 = new Player($player2, $racePlayer2);
		$this->informations = "Quel vaisseau veux-tu utiliser ?";
	}
	
	public function	initRound()
	{
		$this->informations = "Distribution des PP svp !";
	}
	
	public function	ppDistribution()
	{
		
	}
	
	public function playGame()
	{
		
	}
	public function __toString()
	{
		return "Game";
	}
	
	public function getPlayer1() {
		return $this->_player1;
	}
	public function setPlayer1($player1) {
		$this->_player1 = $player1;
		return $this;
	}
	public function getPlayer2() {
		return $this->_player2;
	}
	public function setPlayer2($player2) {
		$this->_player2 = $player2;
		return $this;
	}
	
	
}
?>