<?php

if (isset($_GET['done']) and $_GET['done'] == 1) {
    echo 'done';
    die;
}

// Redirect to full self URL.
$testurl = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['SCRIPT_NAME'];

// Determine if we require the final redirect to be an external destination.
$extdest = isset($_GET['extdest']) ? '&extdest=' . $_GET['extdest'] : '';

$redir = isset($_GET['redir']) ? (int)$_GET['redir'] : 5;
if ($redir > 10) {
    $redir = 10;
}

if ($redir <= 1) {
    // If we need an external final destination, use moodle.com.
    if (!empty($_GET['extdest'])) {
        $target = 'https://moodle.com';
    } else {
        // If no external destination is required, set the target as the standard 'done' URL.
        $target = "$testurl?done=1";
    }
} else {
    $redir--;
    $target = "{$testurl}?redir={$redir}{$extdest}";
}

header('HTTP/1.1 302 Found');
header("Location: $target");

if ($_GET['verbose'] ?? false) {
    echo "You will be shortly redirected to {$target}";
}
