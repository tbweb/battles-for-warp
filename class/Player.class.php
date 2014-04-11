<?php
class Player{
	private $playerName = "";
	private $playerRace = "";
	
	public function __construct($player, $racePlayer)
	{
		$this->playerName = $player;
		$this->playerRace = $racePlayer;
	}

	public function getPlayerName() {
		return $this->playerName;
	}
	public function setPlayerName($playerName) {
		$this->playerName = $playerName;
		return $this;
	}
	public function getPlayerRace() {
		return $this->playerRace;
	}
	public function setPlayerRace($playerRace) {
		$this->playerRace = $playerRace;
		return $this;
	}
}
?>