<?php
/*
设置数据库为utf8编码
2025年11月2日
*/
$database -> set_charset("utf8");

/*
在数据库执行sql语句
2025年11月2日
输入：语句
作用：在sql执行
*/
function SQL($sql) {
    global $database;
    $database->query($sql);
}

/*
通过sql的select命令获取对应表格，将其转为数组输出
2025年11月2日
输入：select语句
输出：数组
*/
function SQLselectArray($sql) {
    global $database;
    $result = $database->query($sql);
    $array = $result->fetch_all(MYSQLI_ASSOC);
    return $array;
}


