<?php

use Composer\Autoload\ClassLoader;
use Symfony\Component\HttpFoundation\Request;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');

/** @var ClassLoader $loader */
$loader = require __DIR__.'/app/autoload.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
