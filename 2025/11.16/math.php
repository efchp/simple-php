<?php
//转换为百分数
function percent($value,$round = 2) {
    return round($value * 100,$round) . "%";
}

//将百分数转换为值
function value($value) {
    return str_replace('%', '', $value) / 100;
}

//浮动计算
function rate($start,$end) {
    return ($end - $start) / $start;
}