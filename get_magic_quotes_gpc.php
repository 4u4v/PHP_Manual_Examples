<?php
/***************
 *Author: 4u4v
 *Date: 2012-12-21
 *Description:
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 *********************/
echo get_magic_quotes_gpc();        
echo $_POST['lastname'];
echo addslashes($_POST['lastname']);
if (get_magic_quotes_gpc())
{
	$lastname = stripslashes($_POST['lastname']);
}
else {
	$lastname = $_POST['lasrname'];
}

$lastname=mysql_real_escape_string($lastname);
echo $lastname;
$sql="INSERT INTO lastnames VALUE ('$lastname')";
?>