<?php
$json ='{"a":1,"b":2,"c":3,"d":4,"e":5}';
var_dump(json_decode($json));
var_dump(json_decode($json,true));
$json='{"foo-bar" : 12345}';
$obj=json_decode($json);
print $obj->{'foo-bar'};
?>
