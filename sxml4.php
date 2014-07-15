<?php
include 'sxml1.php';
$movies=new SimpleXMLElement($xmlstr);
$movies->movie[0]->characters->character[0]->name='Miss abcd';
echo $movies->asXML();
?>
