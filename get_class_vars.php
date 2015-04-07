<?php
/***************
 *Author: 4u4v
 *Date: 2012-12-21
 *Description:
 *Blog: www.4u4v.net
 *Email: admin@4u4v.net
 *********************/
class myclass {

    var $var1; // 此变量没有默认值……
    var $var2 = "xyz";
    var $var3 = 100;
    private $var4; // PHP 5

    // constructor
    function myclass() {
        // change some properties
        $this->var1 = "foo";
        $this->var2 = "bar";
        return true;
    }

}

$my_class = new myclass();

$class_vars = get_class_vars(get_class($my_class));

foreach ($class_vars as $name => $value) {
    echo "$name : $value\n";
}

?>