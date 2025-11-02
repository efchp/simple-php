<?php
/*
输出当前页面信息
2025年11月2日
*/
function page($messgae) {
    switch ($messgae) {
        case 'domain':
            return $_SERVER['HTTP_HOST'];
            break;
        case 'path':
            return $_SERVER['REQUEST_URI'];
            break;
        default:
            return 0;
            break;
    }
    
}

