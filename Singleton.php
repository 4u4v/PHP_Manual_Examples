<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 **********************/
class Example
{
    // 保存类实例在此属性中
    private static $instance;
    
       // 构造方法声明为private，防止直接创建对象
    private function __construct() 
    {
        echo 'I am constructed';
    }

    // singleton 方法
    public static function singleton() 
    {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }
    
    // Example类中的普通方法
    public function bark()
    {
        echo 'Woof!';
    }

    // 阻止用户复制对象实例
    public function __clone()
    {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

}

?>