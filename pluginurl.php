<?php  
header('Content-Type:text/html;Charset=utf-8');  
$arr = array('os'=>'s2l','url'=>'https://codeload.github.com/GitHub-Z/plugin/zip/master');  
echo $_GET['jsoncallback'] . "(".json_encode($arr).")"; 
?>
