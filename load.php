<?php
define('ABSPATH', __DIR__);
define('ADMIN_PATH', ABSPATH.'/admin');
define('ADMIN_SCIPT_PATH', ADMIN_PATH.'/scripts');

ini_set('display_errors', 1);
require_once ABSPATH.'/config/database.php';
require_once ADMIN_SCIPT_PATH.'/functions.php';
require_once ADMIN_SCIPT_PATH.'/sign_up.php';
require_once ADMIN_SCIPT_PATH.'/login.php';
