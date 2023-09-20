<?php

date_default_timezone_set('Asia/Yekaterinburg');
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');

$main = include_template( 'main.php', [
    'lots' => get_lots($con),
    'categories' => get_categories($con),
]);

print($layout = include_template( 'layout.php', [
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'title' => $title,
    'lots' => get_lots($con),
    'categories' => get_categories($con),
    'main' => $main,
]));


