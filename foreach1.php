<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
$arr = array(1,2,3,4);
foreach($arr as &$value) 
{
	$value = $value*2;
}
print_r($arr);
?>