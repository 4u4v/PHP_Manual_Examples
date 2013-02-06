<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
$arr = array("one","two","three");
reset($arr);
while (list($key,$value) = each($arr))
{
	echo "Key: $key; Value: $value<br />\n";
}
foreach ($arr as $key => $value) {
    echo "Key: $key; Value: $value<br />\n";
}
?>