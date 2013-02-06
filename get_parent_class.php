<?php
/***************
 *Author: 4u4v
 *Date: 2012-12-21
 *Description:
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 *********************/
class dad {
	function dad()
	{
	//implements some logic
	}
}
class child extends dad {
	function child()
	{
		echo "I'm ".get_parent_class($this)."'s son \n";
	}
}
$xxx = new child();
?>