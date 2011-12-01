<?php
include_once('./Smarty/Smarty.class.php');
$smarty = new Smarty(); 
$smarty -> template_dir = "./Smarty/templates"; //模板存放目录 
$smarty -> compile_dir = "./Smarty/templates_c"; //编译目录 
$smarty -> left_delimiter = "{{"; //左定界符 
$smarty -> right_delimiter = "}}"; //右定界符 
$conn = mysql_connect('localhost','root','') or die('connect err:'.mysql_errno());
?>