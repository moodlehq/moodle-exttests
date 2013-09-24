<?php

$path = str_replace('rss_redir.php', 'rsstest.xml', $_SERVER['SCRIPT_NAME']);
$target = 'http://'.$_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT'].$path;

header('HTTP/1.1 301 Moved Permanently');
header("Location: $target");
