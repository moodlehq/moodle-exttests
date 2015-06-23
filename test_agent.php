<?php
// This does not output the agent data to prevent random people from
// displaying random stuff on a moodle domain.
if ($_SERVER['HTTP_USER_AGENT'] == 'AnotherUserAgent/1.2') {
    echo 'OK';
}
