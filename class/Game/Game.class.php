<?php

require_once 'class/Player.class.php';

class Game
{
	private $_id_game = 1;
	private $_players = array();
	private $_endGame = FALSE;
	public static $verbose = FALSE;
	
	public function __construct($players)
	{
		$this->_players = $players;
		foreach ($players as &$player)
		{
			$player->setIdGame($this->_id_game);
			print_r($player);
		}
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
	public function getIdGame() {
		return $this->_id_game;
	}
	public function setIdGame($id_game) {
		$this->_id_game = $id_game;
		return $this;
	}
		
}
?>