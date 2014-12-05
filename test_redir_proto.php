<?php

$target = null;

switch ($_GET['proto']) {
    case 'file':
        $target ='file:///';
        break;

    case 'telnet':
        $target = 'telnet://somewhere';
        break;

    case 'ftp':
        $target = 'ftp://nowhere';
        break;
}

if (empty($target)) {
    die();
}

header('HTTP/1.1 302 Found');
header("Location: $target");
