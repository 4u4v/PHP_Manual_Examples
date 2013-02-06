<?php
/***************
 *Author: 4u4v
 *Date: 2012-12-21
 *Description:
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 *********************/
class foo {
    function foo()
    {
    // implements some logic
    }

    function name()
    {
        echo "My name is " , get_class($this) , "\n";
    }
}

// create an object
$bar = new foo();

// external call
echo "Its name is " , get_class($bar) , "\n";

// internal call
$bar->name();

?>