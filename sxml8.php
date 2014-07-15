<?php
if(file_exists('test.xml'))
{
	$xml = simplexml_load_file('test.xml');
	print_r($xml);
}
else {
	exit('Failed to open test.xml.');
}
?>
