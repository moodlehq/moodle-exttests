<?php

if (isset($_GET['done']) and $_GET['done'] == 1) {
    echo 'done';
    die;
}

// Redirect to full self URL.
$testurl = 'http://'.$_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT'].$_SERVER['SCRIPT_NAME'];

$redir = isset($_GET['redir']) ? (int)$_GET['redir'] : 5;
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
