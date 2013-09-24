<?php

if (isset($_GET['done']) and $_GET['done'] == 1) {
    echo 'done';
    die;
}

$testurl = 'http://download.moodle.org/unittest/test_redir.php';

$redir = isset($_GET['redir']) ? $_GET['redir'] : 5;
if ($redir > 10) {
    $redir = 10;
}

if ($redir <= 1) {
    $target = "$testurl?done=1";
} else {
    $redir--;
    $target = "$testurl?redir=$redir";
}

header('HTTP/1.1 302 Found');
header("Location: $target");
