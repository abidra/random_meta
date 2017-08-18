<?php

// all requests are redirected to this file.
// use your .htaccess file to set this up.

error_reporting(-1);
require_once 'vendor/autoload.php';

$klein = new Klein\Klein;

// First, let's setup the layout our site will use. By passing
// an anonymous function in Klein will respond to all methods/URI's.
$klein->respond(function ($request, $response, $service) {
    $service->layout('layouts/default.php');
});

// Home page view
$klein->respond('/', function ($request, $response, $service) {
    // add some data to the view.
    $service->pageTitle = 'Home page';

    // This is the function that renders the view inside the layout.
    $service->render('views/home.php');
});

$klein->respond('/[:name]', function ($request, $response, $service) {
    // add some data to the view.
    $service->pageTitle = $request->name;
    $service->randomNumber = rand(1,20);
    // This is the function that renders the view inside the layout.
    $service->render('views/home.php');
});

$klein->dispatch();
