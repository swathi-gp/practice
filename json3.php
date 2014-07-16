<?php
$json='{"number":1234567897684683246}';
var_dump(json_decode($json));
var_dump(json_decode($json, false , 512));
?>
