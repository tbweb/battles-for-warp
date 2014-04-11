<?php

require_once 'class/Player.class.php';

class Game
{
	private $player1;
	private $player2;
	private $informations;
	public static $verbose = FALSE;
	
	public function __construct($player1, $player2, $racePlayer1, $racePlayer2)
	{
		$this->player1 = new Player($player1, $racePlayer1);
		$this->player2 = new Player($player2, $racePlayer2);
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
		return $this->player1;
	}
	public function setPlayer1($player1) {
		$this->player1 = $player1;
		return $this;
	}
	public function getPlayer2() {
		return $this->player2;
	}
	public function setPlayer2($player2) {
		$this->player2 = $player2;
		return $this;
	}
	
	
}
?>