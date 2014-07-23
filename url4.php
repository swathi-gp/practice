<?php
define("MAXSIZE",100);
echo MAXSIZE;
echo constant("MAXSIZE");
interface bar{
	const test='foobar!';
}
class foo{
	const test='Hello!';
}
define("const",'test');
var_dump(constant('const'));
$const1='test';
var_dump(constant('bar::'.$const1));
var_dump(constant('foo::'.$const1));
