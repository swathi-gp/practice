<?php

//for packing of the data
$binarydata=pack("nvc*",0x1234, 0x5678, 65, 66);

//To display the packed data.
echo $binarydata;


//To check the syntax of the file  
 
 
 
 
if(php_check_syntax('/var/www/country_list.txt'))
echo "correct syntax";
else {
	echo "incorrect syntax";
}
