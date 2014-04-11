<?php

class Game
{
	private $player1;
	private $player2;
	private $informations;
	public static $verbose = FALSE;
	
	public function __construct($player1, $player2)
	{
		if (!empty($player1) && !empty($player2))
		{
			$this->player1 = $player1;
			$this->player2 = $player2;
		}
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
}
?>