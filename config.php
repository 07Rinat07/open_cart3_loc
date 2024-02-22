<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/open_cart3_loc/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/open_cart3_loc/');

// DIR
define('DIR_APPLICATION', '/var/www/html/open_cart3_loc/catalog/');
define('DIR_SYSTEM', '/var/www/html/open_cart3_loc/system/');
define('DIR_IMAGE', '/var/www/html/open_cart3_loc/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'dev');
define('DB_PASSWORD', 'newpassword');
define('DB_DATABASE', 'opencart3');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');