<?php
$mysql -> set_charset("utf8");
if ($database != "") {
    $mysql->select_db($database);
}

//执行sql语句
function sql($sql) {
    global $mysql;
    $mysql->query($sql);
}

//输出select查询的行数
function length($sql) {
    global $mysql;
    $result = $mysql->query($sql);
    return mysqli_num_rows($result);
}

//使用select语句获取数组
function arr($sql) {
    global $mysql;
    $result = $mysql->query($sql);
    $array = $result->fetch_all(MYSQLI_ASSOC);
    return $array;
}
