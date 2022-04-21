<?php if (!defined('APP_VERSION')){
    exit;
} ?>

<?php

define('BASE_URL','http://localhost:8081/Articles_WebSite/Project_Files/');
define('BASE_PATH',__DIR__);

define('DEBUG', true);

/**
 * DATABASE SETTINGS
 */

define('DB_HOST', 'localhost:3306');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db_articles');


define('PAGE_LIMIT',9);

