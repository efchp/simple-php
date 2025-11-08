<?php
//测试ip
$test_ip = "114.134.185.118";
//数据库管理器连接
$mysql = new mysqli('localhost', 'aaaaaaaaaaa', 'm5szPXFtKi8t2Etk','aaaaaaaaaaa');





$package = array(
    "convert","user","page",
    "test",
    "database"
);
for ($i = 0;$i < count($package);$i++) {
    require($package[$i] . ".php");
}