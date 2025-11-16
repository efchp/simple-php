<?php
function ip() {
    return $_SERVER['HTTP_X_FORWARDED_FOR'];
}