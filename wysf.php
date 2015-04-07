<?php
/***************
 *Author: 水木
 *Date: 2012-12-25
 *Description:
 *PHP函数应用编程练习
 *Blog: www.4u4v.net
 *Email: admin@4u4v.net
 **********************/
echo 12 ^ 9; // 输出为 '5'
    echo "<br />";
echo "12" ^ "9"; // 输出退格字符（ascii 8）
                    // ('1' (ascii 49)) ^ ('9' (ascii 57)) = #8
    echo "<br />";
echo "hallo" ^ "hello"; // 输出 ascii 值 #0 #4 #0 #0 #0
                            // 'a' ^ 'e' = #4
    echo "<br />";
echo 2 ^ "3"; // 输出 1
              // 2 ^ ((int)"3") == 1
    echo "<br />";
echo "2" ^ 3; // 输出 1
              // ((int)"2") ^ 3 == 1                            
?> 