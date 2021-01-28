<?php

require_once "./RandomEmojiGenerator.php";

$gen = new RandomEmojiGenerator();
$gen = $gen->generateRandomEmoji();

echo $gen;