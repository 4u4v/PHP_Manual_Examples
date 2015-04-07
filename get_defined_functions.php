<?php
/***************
 *Author: 4u4v
 *Date: 2012-12-21
 *Description:
 *Blog: www.4u4v.net
 *Email: admin@4u4v.net
 *********************/
function myrow($id, $data)
{
	return "<tr><th>$id</th><td>$data</td></tr>\n";
}
$arr = get_defined_functions();
print_r($arr);
?>