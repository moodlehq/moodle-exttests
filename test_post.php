<?php
// This does not output the post data to prevent random people from
// displaying random stuff on a moodle domain.
if ($_POST['data'] == 'moodletest') {
    echo 'OK';
}
