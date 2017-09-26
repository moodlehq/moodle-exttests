<?php
// This does not output the file data to prevent some risks.
if (isset($_FILES['testfile']) && isset($_FILES['testfile']['name'])) {
    if ($_FILES['testfile']['name'] == 'test.txt') {
        echo "OK";
    }
}
