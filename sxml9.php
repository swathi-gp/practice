<?php
$string = <<<XML
<?xml version='1.0'?>
<document>
<title>FortyWhat?</title>
<from>Joe</from>
<to>Jane</to>
<body>
I know that's the answer --but what's the question?
</body>
</document>
XML;
$xml=simplexml_load_string($string);
print_r($xml);
?>