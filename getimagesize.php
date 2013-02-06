<?php
/***************
 *Author: 4u4v
 *Date: 2012-12-21
 *Description:
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 *********************/
list($width, $height, $type, $attr) = getimagesize("test/hehua.jpg");
echo "<img src=\"test/hehua.jpg\" $attr>";
?>