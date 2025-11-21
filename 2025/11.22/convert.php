<?php
function type($type,$content) {
    if (is_array($content)) {
        $array = $content;
    } else if (is_object($content)) {
        $array = json_decode(json_encode($content), true);
    } else {
        json_decode($content);
        if (json_last_error() === JSON_ERROR_NONE) {
            $array = json_decode($content, true);
        } else {
            return "你这既不是数组，也不是json，更不是对象";
        }
    }
    
    switch ($type) {
        case 'array':
            return $array;
            break;
        case 'json':
            return json_encode($array);
            break;
        case 'object':
            return json_decode(json_encode($array));
            break;
        default:
            return "当前只支持转化为数组、json和对象";
            break;
    }
}
