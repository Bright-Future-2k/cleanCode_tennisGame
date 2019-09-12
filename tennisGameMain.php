<?php
include ('tennisGame.php');
$tennisGame = new TennisGame();
$tennisGame->getScore('player1', 'player2');
echo $tennisGame;