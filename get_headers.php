<?php
/***************
 *Author: 4u4v
 *Date: 2012-12-21
 *Description:
 *Blog: www.4u4v.net
 *Email: admin@4u4v.net
 *********************/
$url = 'http://www.4u4v.net';
print_r(get_headers($url));
print_r(get_headers($url,1));
?>