<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
function __autoload($class_name) {
    require_once $class_name . '.php';
}
//本例尝试分别从 MyClass1.php 和 MyClass2.php 文件中加载 MyClass1 和 MyClass2 类
$obj1 = new MyClass1();
echo "<hr />";
$obj2 = new MyClass2();
?>