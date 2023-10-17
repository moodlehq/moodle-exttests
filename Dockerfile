FROM php:7.1-apache


HEALTHCHECK --interval=5s CMD curl -f http://localhost:$(cat /etc/apache2/ports.conf | grep '^Listen' | cut -d ' ' -f 2) || exit 1

# Unfortunately this repository is used in other places and not simple to restructure.
# All files are in the root at the moment.
COPY H5P.Accordion.h5p /var/www/html
COPY behat-rsstest.xml /var/www/html
COPY downloadtests.md5 /var/www/html
COPY downloadtests.zip /var/www/html
COPY h5pcontenttypes.json /var/www/html
COPY h5puuid.json /var/www/html
COPY ical.ics /var/www/html
COPY ims_cartridge_basic_lti_link.xml /var/www/html
COPY index.html /var/www/html
COPY lti_keyset.json /var/www/html
COPY rss_redir.php /var/www/html
COPY rsstest.xml /var/www/html
COPY test.html /var/www/html
COPY test.jpg /var/www/html
COPY test_agent.php /var/www/html
COPY test_file.php /var/www/html
COPY test_file_name.php /var/www/html
COPY test_post.php /var/www/html
COPY test_redir.php /var/www/html
COPY test_redir_proto.php /var/www/html
COPY test_relative_redir.php /var/www/html
COPY testnodtd.html /var/www/html

# Create the entrypoint.
COPY root/usr /usr

CMD ["apache2-foreground"]
ENTRYPOINT ["moodle-docker-php-entrypoint"]
