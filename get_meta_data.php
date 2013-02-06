<?php
/***************
 *Author: 4u4v
 *Date: 2012-12-21
 *Description:
 *Blog: shuimu.js.cn
 *Email: admin@4u4v.net
 *********************/
function get_meta_data($content) 
{ 
    $content = strtolower($content); 
    $content = preg_replace("'<style[^>]*>.*</style>'siU",'',$content);  // strip js 
    $content = preg_replace("'<script[^>]*>.*</script>'siU",'',$content); // strip css 
    $split = explode("\n",$content); 
    foreach ($split as $k => $v) 
    { 
        if (strpos(' '.$v,'<meta')) { 
             preg_match_all( 
"/<meta[^>]+(http\-equiv|name)=\"([^\"]*)\"[^>]" . "+content=\"([^\"]*)\"[^>]*>/i", 
$v, $split_content[],PREG_PATTERN_ORDER);; 
        } 
    } 
    return $split_content; 
} 
?>