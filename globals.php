<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: www.4u4v.net
 *Email: admin@4u4v.net
 **********************/
function test() {
	$foo = "local variable";
	echo '$foo in global scope: ' .$GLOBALS["foo"]. "<br />";
	echo '$foo in current scope: ' . $foo . "\n";
}
$foo = "Examlpe content";
test();
?>