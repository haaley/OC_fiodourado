<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/OC_fiodourado/admin/');
define('HTTP_CATALOG', 'http://localhost/OC_fiodourado/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/OC_fiodourado/admin/');
define('HTTPS_CATALOG', 'http://localhost/OC_fiodourado/');

// DIR
<<<<<<< HEAD
define('DIR_APPLICATION', 'C:/wamp64/www/OC_fiodourado/admin/');
define('DIR_SYSTEM', 'C:/wamp64/www/OC_fiodourado/system/');
define('DIR_IMAGE', 'C:/wamp64/www/OC_fiodourado/image/');
define('DIR_STORAGE', 'C:/wamp64/www/storage/');
define('DIR_CATALOG', 'C:/wamp64/www/OC_fiodourado/catalog/');
=======
define('DIR_APPLICATION', 'C:/wamp64/www/opencart/admin/');
define('DIR_SYSTEM', 'C:/wamp64/www/opencart/system/');
define('DIR_IMAGE', 'C:/wamp64/www/opencart/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', 'C:/wamp64/www/opencart/catalog/');
>>>>>>> 09e318ba0d4e9718308ce29cbd1abac116e9f239
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
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
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'fiodourado');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
