<?php
class Foo
{
public static $my_static='foo';
public function staticValue(){
return self::$my_static;
}
}
class Bar extends Foo
{
public function fooStatic()
{
return parent::$my_static;
}
}
print Foo::$my_static . "\n";
$foo=new Foo();
print $foo->staticValue() . "\n";
print $foo->my_static . "\n";
print $foo::$my_static ."\n";
$classname='Foo';
print $classname::$my_static . "\n";
?>

