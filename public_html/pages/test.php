<?php


use Core\Game;
use Core\Sniper;

require '../../bootloader.php';

$game = new Game();

$game->addPlayerToTeamA(new Sniper('Artiom'));
$game->addPlayerToTeamA(new Sniper('Anna'));
$game->addPlayerToTeamB(new Sniper('Melnik'));
$game->addPlayerToTeamB(new Sniper('Miller'));

$game->goTeamA();

var_dump($game);