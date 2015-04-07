<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
class MethodTest {
    public function __call($name, $arguments) {
        // 注意: $name 区分大小写
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }

    /**  PHP 5.3.0之后版本  */
    public static function __callStatic($name, $arguments) {
        // Note: value of $name is case sensitive.
        echo "Calling static method '$name' "
             . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodTest;
$obj->runTest('in object context');

MethodTest::runTest('in static context');  // PHP 5.3.0之后版本
?> 
