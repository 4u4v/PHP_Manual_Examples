<?php
/***************
 *Author: 4u4v
 *Date: 2012-12-21
 *Description:
 *Blog: www.4u4v.net
 *Email: admin@4u4v.net
 *********************/
echo $_SERVER['HTTP_USER_AGENT'];
echo "<hr />";
$browser = get_browser(null, true);
print_r($browser);
?>