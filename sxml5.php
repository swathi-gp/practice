<?php
include 'sxml1.php';
$movies=new SimpleXMLElement($xmlstr);
$character=$movies->movie[0]->characters->addChild('character');
$character->addChild('name','Mr. Parser');
$character->addChild('actor','John Doe');
$director= $movies->movie[0]->addChild('director');
$director->addChild('name','swa');
$director->addChild('direction','abcd');
$rating=$movies->movie[0]->addChild('rating','PG');
$rating->addAttribute('type','mpaa');
echo $movies->asXMl();
?>
