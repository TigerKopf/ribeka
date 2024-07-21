<?php

session_start();
ob_start();
error_reporting(-1);
ini_set('display_errors', 'On');

$data = '/data';

define('CONFIG_DIR', __DIR__ . $data . '/config');
define('LOG_DIR', __DIR__ . $data . '/logs');
define('ASSETS_DIR', __DIR__ . $data . '/assets');
define('TEMPLATES_DIR', __DIR__ . $data . '/templates');
define('STORAGE_DIR', __DIR__ . $data . '/storage');
define('FUNCTION_DIR', __DIR__ . $data . '/function');
define('STYLE_DIR',__DIR__. $data . '/library');
define('BACKEND',__DIR__. $data . '/backend');
define('IMG',__DIR__. $data . '/img');
define('VENDOR',__DIR__. $data . '/vendor');
define('PHPMAILER',__DIR__. $data . '/PHPMailer/src');
require __DIR__ . $data . '/includes.php';
