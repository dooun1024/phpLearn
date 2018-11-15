<?php
$users = [
    'zhangsan',
    'lisi'
];

$userName = $_GET["userName"];

if (in_array($userName, $users)){
    echo "true";
} else {
    echo "false";
}
?>