<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: www.4u4v.net
 *Email: admin@4u4v.net
 **********************/
class Exception {
/* 属性 */
protected string $message ;
protected int $code ;
protected string $file ;
protected int $line ;

/* 方法 */
public __construct ([ string $message = "" [, int $code = 0 [, Exception $previous = null]]] )
final public string getMessage ( void ) //异常抛出的信息
final public Exception getPrevious ( void ) //前一异常
final public int getCode ( void ) //异常代码，这是用户自定义的
final public string getFile ( void ) //发生异常的文件路劲
final public int getLine ( void ) //发生异常的行
final public array getTrace ( void ) //异常追踪信息(array)
final public string getTraceAsString ( void ) //异常追踪信息(string)
public string __toString ( void ) //试图直接 将异常对象当作字符串使用时调用子函数的返回值
final private void __clone ( void ) //克隆异常对象时调用
}
 
?>