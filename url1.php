<?php

$data=array('foo'=>'bar',
'baz'=>'boom',
'cow'=>'milk',
'php'=>'hypertext preprocessor');
echo http_build_query($data) . "\n";
echo "<br/>";
echo http_build_query($data, '', '&amp;');
echo "<br/>";

$data=array('user'=>array('name'=>'Bob Smith',
							'age'=>47,
							'sex'=>'M',
							'dob'=>'5/12/1936'),
			'pastimes'=>array('golf','opera','poker','rap'),
			'children'=>array('bobby'=>array('age'=>12,
												'sex'=>'M'),
							  'sally'=>array('age'=>8,
							  				 'sex'=>'F')),
			'CEO');
echo http_build_query($data,'flag_');
?>