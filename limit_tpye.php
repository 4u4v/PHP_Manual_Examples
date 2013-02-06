<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
//如下面的类
class MyClass
{
    /**
     * 测试函数
     * 第一个参数必须为类OtherClass的一个对象
     */
    public function test(OtherClass $otherclass) {
        echo $otherclass->var;
    }


    /**
     * 另一个测试函数
     * 第一个参数必须为数组 
     */
    public function test_array(array $input_array) {
        print_r($input_array);
    }
}

//另外一个类
class OtherClass {
    public $var = 'Hello World';
}
?> 
