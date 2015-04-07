<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
$i = 1;
if ($i == 0) {
	echo "i equals 0";
} elseif ($i == 1) {
	echo "i equals 1";
} elseif ($i == 2) {
	echo "i qeuals 2";
}
echo "<hr />";

switch ($i) {
	case 0:
	echo "i equals 0";
	break;
	case 1:
	echo "i equals 1";
	break;
	case 2:
	echo "i equals 2";
	break;
}
?>