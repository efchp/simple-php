<?php
function cookie($run,$key = "",$value = "") {
    if ($run == "add" || $run == "set") {
        setcookie($key,$value,time() + 7 * 24 * 60 * 60, "/", get('domain'));
    } else if ($run == "delect" && $key != "") {
        setcookie($key,$value,time() - 7 * 24 * 60 * 60, "/", get('domain'));
    } else {
        return $_COOKIE[$key];
    }
}

