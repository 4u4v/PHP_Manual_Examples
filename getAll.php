<?php
/***************
 *Author: 4u4v
 *Date: 2012-12-26
 *Description:
 *Blog: www.4u4v.net
 *Email: admin@4u4v.net
 *********************/
function getAll($sql)
{
	$result = $this->query($sql);
	if ($result !== false)
	{
		$arr = array();
		while ($row=mysql_fetch_assoc($result))
		{
			$arr[] = $row; 
		}
		return $arr;
	}
	else 
	{
		return false;
	}
}
?>