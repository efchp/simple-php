<?php
/*
沃效乐简单php库
2025年11月21日版
*/


//默认优化，别管
header('Content-Type: text/html; charset=utf-8');







//测试ip
$test_ip = "";
//数据库管理器连接
$mysql = new mysqli('localhost', 'invest', 'sfiC2EnEXCRT8yWy');





$package = array(
    "convert","user","page","math",
    "test",
    "database","cookie"
);
for ($i = 0;$i < count($package);$i++) {
    require($package[$i] . ".php");
}