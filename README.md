Test files for external Moodle tests
====================================

**It's really important to keep these files completely unmodified in order to obtain coherent test results in all supported moodle versions.**


Installation:

1. clone this repository or download to your local web sever without any line-endings conversion
2. edit config.php to include: define('TEST_EXTERNAL_FILES_HTTP_URL', 'http://localhost/moodle-exttests');
3. optionally configure SSL on your test server and define('TEST_EXTERNAL_FILES_HTTPS_URL', 'https://localhost/moodle-exttests');

This folder contains several files that are used for unit testing
Moodle download capabilities.

File specs:

* test.html: One test valid xhtml file containing UTF-8 chars and differend linefeeds mixed (unix, dos, mac).
 * md5: 47250a973d1b88d9445f94db4ef2c97a
 * size: 3137

* test.jpg: One test binary (image) file.
 * md5: 2af180e813dc3f446a9bb7b6af87ce24
 * size: 39476

* downloadtests.zip: One zipped folder containing the previous two files (test.html and test.jpg) to be used to test the componentlib install functions.
 * md5: 9e94f74b3efb1ff6cf075dc6b2abf15c
 *size: 39481

* downloadtests.md5 : One text file, required by componentlib in order to download the previous zip file.
 * md5:  fde140a6d13cb0c671b1b9d190bf41ee
 * size: 47

* rsstest.xml: One valid rss feed.
 * md5:  8fd047914863bf9b3a4b1514ec51c32c
 * size: 32188

That's all, happy Unit Testing!

20071222 stronk7: initial version
20071230 stronk7: added rss test file
