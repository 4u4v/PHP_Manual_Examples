<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
class MyClass
{
    const constant = 'constant value';

    function showConstant() {
        echo  self::constant . "\n";
    }
}

echo MyClass::constant . "\n";

$classname = "MyClass";
echo $classname::constant . "\n"; // PHP 5.3.0之后

$class = new MyClass();
$class->showConstant();

echo $class::constant."\n"; // PHP 5.3.0之后
?> 
