<?php

use App\Application;
use Symfony\Component\HttpFoundation\Request;

include '../vendor/autoload.php';

$request = Request::createFromGlobals();

$response = (new Application($request))->handle();

$response->send();
phpinfo();
exit;

$input = file_get_contents('php://stdin');

$request = new app\JsonRequest($input);
$response = $request->handle();
file_put_contents('php://stdout', $response->return());
