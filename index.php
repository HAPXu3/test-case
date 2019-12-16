<?php

include 'vendor/autoload.php';

$input = file_get_contents('php://stdin');

$request = new app\JsonRequest($input);
$response = $request->handle();
file_put_contents('php://stdout', $response->return());
