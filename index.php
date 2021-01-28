<?php

require_once "./RandomEmojiGenerator.php";

$gen = new RandomEmojiGenerator();
$gen = $gen->generateRandomEmoji();

echo "<div style=\"font-size: 50px\">$gen</div>";