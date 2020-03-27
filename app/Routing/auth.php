<?php

/**
 * Auth Routes.
 */
$router->map('GET', '/login', 'App\Controllers\Auth\LoginController@show', 'login');
$router->map('GET', '/logout', 'App\Controllers\Auth\LogoutController@show', 'logout');

$router->map('GET', '/register', 'App\Controllers\Auth\RegisterController@show', 'register');
$router->map('GET', '/forgot', 'App\Controllers\Auth\ForgotPasswordController@show', 'forgot');
$router->map('GET', '/reset', 'App\Controllers\Auth\ResetPasswordController@show', 'reset');
