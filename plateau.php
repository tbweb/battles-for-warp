<?php
require_once 'class/Tools/Session.class.php';
require_once 'class/Game/Game.class.php';
require_once 'class/Database/Database.class.php';
require_once 'class/Solid/Ship.class.php';
require_once 'class/Solid/Solid.class.php';
$sess = new Session();
$game = $sess->getGameInSession();
$ships = array();
 foreach ($game->getPlayers() as $key => $player) {
 	$ships[] = $player->getPlayship();
 }
print '<table style="width: 100%; height: 100%;" border="1" cellpadding="0" cellspacing="0">';
$y = 0;
while ($y < 100)
{
  $x = 0;
	print '<tr>';
	while ($x < 150)
	{
		print '<td id="'.$x.':'.$y.'">';
		foreach ($ships as $key => $ship) {
			// if ($ship->getPhy()->get_x() == $x && $ship->getPhy()->get_y() == $y)
			// 	print("o");
		}
		print '</td>';
		$x++;
	}
	print '</tr>';
	$y++;
}
print '</tbody></table>';
?>
