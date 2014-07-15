<?php
include 'sxml1.php';
$movies=new SimpleXMLElement($xmlstr);
foreach($movies->xpath('//character') as $character)
{
echo $character->name, 'placed by',$character->actor;
}
?>