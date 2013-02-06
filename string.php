<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
echo 'this is a simple string <br />';

// 可以录入多行
echo 'You can also have embedded newlines in 
strings this way as it is
okay to do <br />';

// 输出： Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// 输出： You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

echo "<br />";
// 输出： You deleted C:\*.*?
echo 'You deleted C:\*.*?';

echo "<br />";
// 输出： This will not expand: \n a newline
echo 'This will not expand: \n a newline <br />';

// 输出： Variables do not $expand $either
echo 'Variables do not $expand $either';
?>