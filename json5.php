<?php
$a =array('<foo>',"'bar'",'"baz"','&blong&',"\xc3\xa9");
echo "Normal:",json_encode($a),"\n";
echo "Tags:",json_encode($a, JSON_HEX_TAG),"\n";
echo "Apos:",json_encode($a,JSON_HEX_APOS),"\n";
echo "QUOT:",json_encode($a,JSON_HEX_AMP),"\n";
echo "Unicode:",json_encode($a,JSON_UNESCAPED_UNICODE),"\n";
echo "All:",json_encode($a,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP|JSON_UNESCAPED_UNICODE),"\n";
$b=array();
echo "Empty rray output as array:",json_encode($b),"\n";
echo "Empty array output as object:",json_encode($b,JSON_FORCE_OBJECT),"\n";
$c=array(array(1,2,3));
echo "nonassociative array output as array:",json_encode($c),"\n";
echo "nonassociative array output as object:",json_encode($c,JSON_FORCE_OBJECT),"\n";
$d=array('foo'=>'bar','baz'=>'long');
echo "Associative array output as array:",json_encode($d),"\n";
echo "Associative array output as object:",json_encode($d,JSON_FORCE_OBJECT),"\n";
