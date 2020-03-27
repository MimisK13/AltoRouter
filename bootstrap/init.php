<?php

/**
 * Start Session.
 */
if (!isset($_SESSION)) {
    session_start();
}

/**
 * Load Environment Variables.
 */
require_once __DIR__.'/../app/Config/env.php';

/**
 * Load Routes.
 */
require_once __DIR__.'/../app/Routing/routes.php';
require_once __DIR__.'/../app/Routing/auth.php';

/**
 * Init Route Dispatcher.
 */
new \App\Routing\RouteDispatcher($router);
