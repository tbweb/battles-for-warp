<?php
include "class/Tools/Session.class.php";
include "class/Player.class.php";
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
      print '<td id="'.$x.':'.$y.'"><br></td>';
      $x++;
    }
    print '</tr>';
    $y++;
}
print '</tbody></table>';
?>
