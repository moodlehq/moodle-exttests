Test files for external Moodle tests
====================================

Installation:
1/ clone this repository to your local web sever
2/ edit config.php to include: define('TEST_EXTERNAL_FILES_HTTP_URL', 'http://localhost/moodle-exttests');
3/ optionally configure SSL on your test server and define('TEST_EXTERNAL_FILES_HTTPS_URL', 'https://localhost/moodle-exttests');
