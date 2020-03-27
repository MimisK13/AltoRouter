<?php

/**
 * Base Path.
 */
define('BASE_PATH', realpath(__DIR__.'/../../'));

/**
 * Load Composer.
 */
require_once __DIR__.'/../../vendor/autoload.php';

/**
 * Init DotEnv.
 */
$dotEnv = new \Dotenv\Dotenv(BASE_PATH);
$dotEnv->load();
