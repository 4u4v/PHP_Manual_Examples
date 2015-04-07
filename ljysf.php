<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/

// 下面的 foo() 不会被调用，因为它们被运算符“短路”了。
$a = (false && foo());
$b = (true  || foo());
$c = (false and foo());
$d = (true  or  foo());

// "||" 的优先级比 "or" 高
$e = false || true; // $e 被赋值为 (false || true)，结果为 true
$f = false or true; // $f 被赋值为 false [Altair注："=" 的优先级比 "or" 高]
var_dump($e, $f);

// "&&" 的优先级比 "and"　高
$g = true && false; // $g 被赋值为 (true && false)，结果为 false
$h = true and false; // $h 被赋值为 true [Altair注："=" 的优先级比 "and" 高]
var_dump($g, $h);
?> 