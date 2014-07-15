<?php
libxml_use_internal_errors(true);
$sxe=simplexml_load_string("<line><l>hello</l></line>");
if($sxe===FALSE){
	echo "Failed loading XML\n";
	foreach(libxml_get_errors() as $error)
	{
		echo "\t",$error->message;
	}
}
else {
	echo "hello";
}
?>
