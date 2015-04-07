<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
class A
{
	function foo()
	{
		if (isset($this)) {
			echo '$this is defined (';
			echo get_class($this);
			echo ")\n";
		} else {
			echo "\$this is not defined. \n";
		}
	}
}

class B
{
	function bar ()
	{
		A::foo();
	}
}

$a = new A();
$a->foo();
A::foo();
$b = new B();
$b->bar();
B::bar();
?>