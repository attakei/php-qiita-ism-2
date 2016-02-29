<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use Laravel\Socialite\Facades\Socialite;


$app->get('/', function () use ($app) {
    return $app->version();
});


// Authenticate
$app->get('/auth', function () use ($app) {
    return view('auth.form');
});
$app->post('/auth/google', [
    'as' => 'auth_google_oauth',
    function ()
    {
        app()->configure('services');
        $driver = Socialite::driver('google');
        $driver->stateless();
        return $driver->redirect();
    }
]);