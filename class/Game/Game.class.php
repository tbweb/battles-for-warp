<?php

require_once 'class/Player.class.php';

class Game
{
	private $_id_game;
	private $_players = array();
	private $_endGame = FALSE;
	private $_informations;
	public static $verbose = FALSE;
	
	public function __construct($players)
	{
		$this->_players = $players;
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
	
	public function getPlayers() {
		return $this->_players;
	}

	public function getEndgame() {
		return $this->_endGame;
	}

	public function setEndgame($_endGame) {
		$this->_endGame = $_endGame;
		return $this;
	}	
}
?>