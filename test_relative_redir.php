<?php

$type = isset($_POST['type']) ? $_POST['type'] : (isset($_GET['type']) ? $_GET['type'] : (302));

$type = (int)$type;

switch ($type) {
    case 301: header('HTTP/1.1 301 Moved Permanently'); break;
    case 303: header('HTTP/1.1 303 See Other'); break;
    case 307: header('HTTP/1.1 307 Temporary Redirect'); break;
    case 308: header('HTTP/1.1 308 Permanent Redirect'); break;
    default: header('HTTP/1.1 302 Found'); break;
}

header("Location: test_redir.php?done=1");
