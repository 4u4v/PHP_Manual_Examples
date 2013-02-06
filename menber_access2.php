<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
/**
 * Define MyClass
 */
class MyClass
{
    // 构造函数必须是 public
    public function __construct() { }

    // 声明一个 public 的方法
    public function MyPublic() { }

    // 声明一个 protected 的方法
    protected function MyProtected() { }

    // 声明一个 private 的方法
    private function MyPrivate() { }

    // 这个方法也是 public 的
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass;
$myclass->MyPublic(); // 这行能被正常执行
$myclass->MyProtected(); // 这行会产生一个致命错误
$myclass->MyPrivate(); // 这行会产生一个致命错误
$myclass->Foo(); // Public、Protected 和 Private 都被调用了


/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // This is public
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate(); // 这行会产生一个致命错误
    }
}

$myclass2 = new MyClass2;
$myclass2->MyPublic(); // 这行能被正常执行
$myclass2->Foo2(); // Public 和 Protected 都被调用了，但 Private 不会被调用
?> 
