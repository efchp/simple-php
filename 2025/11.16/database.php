<?php
$mysql -> set_charset("utf8");

//执行sql语句
function sql($database,$sql) {
    global $mysql;
    $mysql->select_db($database);
    $mysql->query($sql);
}

//输出select查询的行数
function length($database,$sql) {
    global $mysql;
    $mysql->select_db($database);
    $result = $mysql->query($sql);
    return mysqli_num_rows($result);
}

//使用select语句获取数组
function arr($database,$sql) {
    global $mysql;
    $mysql->select_db($database);
    $result = $mysql->query($sql);
    $array = $result->fetch_all(MYSQLI_ASSOC);
    return $array;
}
