<?php
function page($value) {
    switch ($value) {
        case 'domain':
            return $_SERVER['HTTP_HOST'];
            break;
        case 'path':
            return $_SERVER['REQUEST_URI'];
            break;
        case 'link':
            return $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            break;
        case 'png':
            header('Content-Type: image/png');
            break;
        case 'jpg':case 'jpeg':
            header('Content-Type: image/jpeg');
            break;
        case 'json':
            header('Content-type: application/json');
            break;
        case 'xml':
            header('Content-Type: application/xml; charset=utf-8');
            break;
        case 'css':
            header('Content-type: text/css');
            break;
        case 'js':
            header('Content-type: text/javascript');
            break;
        case 'html':default:
            header('Content-Type: text/html; charset=utf-8');
            break;
    }
}