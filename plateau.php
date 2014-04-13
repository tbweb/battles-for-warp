<?php
require_once 'class/Tools/Session.class.php';
require_once 'class/Database/Database.class.php';
require_once 'class/Game/Game.class.php';
require_once 'class/Player.class.php';
require_once 'class/Solid/Solid.class.php';
require_once 'class/Solid/Ship.class.php';
require_once 'class/Solid/Physics.class.php';
$sess = new Session();
$game = $sess->getGameInSession();
$ships = array();
 foreach ($game->getPlayers() as $key => $player) {
 	$ships[] = $player->getPlayship();
 }
print '<table style="width: 100%; height: 100%;" border="1" cellpadding="0" cellspacing="0">';
$y = 0;
print_r($ships);
while ($y < 100)
{
  $x = 0;
	print '<tr>';
	while ($x < 150)
	{
		print '<td id="'.$x.':'.$y.'">';
		foreach ($ships as $key => $ship)
		{
			// $phy = $ship->getPhy();
			// if ($phy->get_x() == $x && $phy->get_y() == $y)
			// {
			// 	print("o");
			// }
		}
		print '</td>';
		$x++;
	}
	print '</tr>';
	$y++;
}
print '</tbody></table>';
?>
