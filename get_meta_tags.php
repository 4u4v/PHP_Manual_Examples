<?php
/***************
 *Author: 4u4v
 *Date: 2012-12-21
 *Description:
 *Blog: www.4u4v.net
 *Email: admin@4u4v.net
 *********************/
$tag = get_meta_tags('http://www.4u4v.net/');

// 注意所有的键（key）均为小写，而键中的‘.’则转换成了‘_’。
//echo $tags['author'];
//echo $tags['title'];
echo $tags['keywords'];  
echo $tags['discription'];
?>