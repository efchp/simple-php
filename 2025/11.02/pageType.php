<?php
/*
将页面以json的形式输出
2025年11月2日
*/
function pageType($type) {
    switch ($type) {
        //图片类
        case 'jpg':case 'jpeg':
            header('Content-Type: image/jpeg');
            break;
        case 'png':
            header('Content-Type: image/png');
            break;
        //视频类
        case 'mp4':
            header('Content-Type: video/mp4');
            break;
        //音频类
        case 'mpeg':case 'mp3':
            header('Content-Type: audio/mpeg');
            break;
        //复合文件类
        case 'pdf':
            header('Content-type: application/pdf');
            break;
        //纯文本文档类
        case 'json':
            header('Content-type: application/json');
            break;
        case 'xml':
            header('Content-Type: application/xml; charset=utf-8');
            break;
        case 'js':
            header('Content-type: text/javascript');
            break;
        case 'css':
            header('Content-type: text/css');
            break;
        case 'html':default:
            header('Content-Type: text/html; charset=utf-8');
            break;
    }
}





