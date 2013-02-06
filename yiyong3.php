<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
$ref = 0;
$row =& $ref;
foreach (array(1, 2, 3) as $row) {
    // do something
}
echo $ref; // 3 - last element of the iterated array
?>