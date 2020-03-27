<?php

/**
 * Init AltoRouter.
 */
$router = new AltoRouter;

/**
 * Base Routes.
 */
$router->map('GET', '/', 'App\Controllers\IndexController@show', 'home');
