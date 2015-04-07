<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
function foo()
{
  function bar()
  {
    echo "I don't exist until foo() is called.\n";
  }
}

/* 现在还不能调用bar()函数，因为它还不存在 */

foo();

/* 现在可以调用bar()函数了，因为foo()函数
   的执行使得bar()函数变为已定义的函数 */

bar();

?>