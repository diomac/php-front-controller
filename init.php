<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

define('ROOT_DIR', __DIR__ . '/');

include ROOT_DIR . 'core/autoloader.php';
spl_autoload_register('autoload');

try {
    System::init();
} catch (Exception $exception) {
    if (defined('ENVIRONMENT_SERVER') && 'P' !== ENVIRONMENT_SERVER) {
        Debug::dd($exception);
    }
}


