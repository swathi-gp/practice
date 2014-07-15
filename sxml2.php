<?php
include 'sxml1.php';
$movies=new SimpleXMLElement($xmlstr);
echo $movies->movie[0]->{'gr'}->lines;
foreach ($movies->movie->characters->character as $character)
{
echo $character->name,'played by ',$character->actor,PHP_EOL;
}
foreach ($movies->movie[0]->rating as $rating)
{
switch((string)$rating['type'])
{
case 'thumbs':
echo $rating, 'thumbs up';
break;
case 'stars':
echo $rating, 'stars';
break;
}
}
if((string)$movies->movie->title=='PHP: Behind the parser')
{
print 'My favorite movie.';
}
echo $movies->movie->title;
$movies2= new SimpleXMLElement($xmlstr);
$movies3=new SimpleXMLElement($xmlstr);
echo "<br/>";
var_dump($movies2==$movies3);
?>
