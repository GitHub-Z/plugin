<?php  
header('Content-Type:text/html;Charset=utf-8');  
$arr = array('os'=>'s2l','url'=>'https://codeload.github.com/GitHub-Z/plugin/pluginurl.php');  
echo $_GET['jsoncallback'] . "(".json_encode($arr).")"; 
?>