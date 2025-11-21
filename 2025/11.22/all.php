<?php
/*
沃效乐简单php库
2025年11月22日版
*/
header('Content-Type: text/html; charset=utf-8');

$package = array(
    "config",
    "convert","user","page","math","webdav",
    "test",
    "mail","database","cookie"
);
for ($i = 0;$i < count($package);$i++) {
    require($package[$i] . ".php");
}