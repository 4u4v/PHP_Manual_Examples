<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: www.4u4v.net
 *Email: admin@4u4v.net
 **********************/
 // Example usage for: Ternary Operator
 $action = (empty($_POST['action'])) ? 'default' : $_POST['action'];

 // The above is identical to this if/else statement
 if (empty($_POST['action'])) {
     $action = 'default';
 } else {
     $action = $_POST['action'];
 }

 ?> 