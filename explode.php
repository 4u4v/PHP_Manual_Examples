<?php
/***************
 *Author: 4u4v
 *Date: 2012-12-21
 *Description:
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 *********************/
// 示例 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
echo "<hr />";
// 示例 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *

?>