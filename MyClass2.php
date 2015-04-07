<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: www.4u4v.net
 *Email: admin@4u4v.net
 **********************/
class MyClass2 
{
	public $var = "This is MyClass2 var value.";

	public function displayVar() {
		echo $this->var;
	}
}
$obj2 = new MyClass2;
$obj2->displayVar();
?>