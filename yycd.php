<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
function foo(&$var)
{
    $var++;
}

$a=5;
foo($a);
// $a is 6 here
?>