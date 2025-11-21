<?php
function get($value) {
    switch ($value) {
        case 'ip':
            $result = $_SERVER['HTTP_X_FORWARDED_FOR'];
            break;
        case 'protocol':
            $result = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
            break;
        case 'domain':
            $result = $_SERVER['HTTP_HOST'];
            break;
        case 'path':
            $result = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            break;
        case 'uri':
            $result = $_SERVER['REQUEST_URI'];
            break;
        case 'link':
            $result = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            break;
        default:
            $result = "没有值";
            break;
    }
    return $result;
}