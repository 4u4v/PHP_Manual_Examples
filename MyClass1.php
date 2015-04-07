<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: www.4u4v.net
 *Email: admin@4u4v.net
 **********************/
class MyClass1 {
    // 成员声明
    public $var = 'This is MyClass1 var value.';
    // 方法声明
    public function displayVar() {
        echo $this->var;
    }
}
$obj1 = new MyClass1();
$obj1->displayVar();
?>