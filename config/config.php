<?php
include_once('./Smarty/Smarty.class.php');
$smarty = new Smarty(); 
$smarty -> template_dir = "./Smarty/templates"; //ģ����Ŀ¼ 
$smarty -> compile_dir = "./Smarty/templates_c"; //����Ŀ¼ 
$smarty -> left_delimiter = "{{"; //�󶨽�� 
$smarty -> right_delimiter = "}}"; //�Ҷ���� 
$conn = mysql_connect('localhost','root','') or die('connect err:'.mysql_errno());
?>