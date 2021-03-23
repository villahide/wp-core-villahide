Development
=====

PHP builtin webserver

add to local-config.php

    define('WP_HOME','http://localhost:8001');
    define('WP_SITEURL','http://localhost:8001/wp');

Launch PHP server

    php -S localhost:8001

Translations in theme

    /usr/local/opt/gettext/bin/msgfmt languages/ru_RU.po -o languages/ru_RU.mo
