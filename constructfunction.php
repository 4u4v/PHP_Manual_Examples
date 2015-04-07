<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
class BaseClass {
	function __construct() {
		print "In BaseClass constructor\n";
	}
}

class SubClass extends BaseClass {
	function __construct() {
		parent::__construct();
		print "In SubClass constructor\n";
	}
}

$obj = new BaseClass();
$obj = new SubClass();
?>