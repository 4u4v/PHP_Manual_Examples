<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();
?>