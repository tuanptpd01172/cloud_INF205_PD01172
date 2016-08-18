<?php
/*Đường dẫn gốc
 * 
 */
$doc_root=$_SERVER['HTTP_HOST'];
/*Đường dẫn tương đối
 * 
 */
$uri=$_SERVER['REQUEST_URI'];
$dir=  explode("/", $uri);
$app_path="/".$dir[1]."/";
$include_path=$doc_root.$app_path;
set_include_path($include_path);
/*
printf($doc_root);
printf($uri.'<br />');
printf($app_path.'<br />');

printf($include_path);
*/
 
?>