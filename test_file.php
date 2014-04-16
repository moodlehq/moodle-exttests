<?php
// This does not output the file data to prevent some risks.
if (isset($_FILES['testfile'])) {
    if (file_get_contents($_FILES['testfile']['tmp_name']) === 'moodletest') {
        echo 'OK';
    }
}
