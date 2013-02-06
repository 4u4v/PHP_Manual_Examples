<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
class SimpleClass
{
    // 无效的类成员定义：
    public $var1 = 'hello '.'world';
    public $var2 = <<<EOD
hello world
EOD;
    public $var3 = 1+2;
    public $var4 = self::myStaticMethod();
    public $var5 = $myVar;

    // 正确的类成员定义：
    public $var6 = myConstant;
    public $var7 = self::classConstant;
    public $var8 = array(true, false);


}
?> 