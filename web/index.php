<?php
use Doctrine\Common\Annotations\AnnotationRegistry;
use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;

error_reporting(E_ALL);
ini_set("display_errors", 1);


chdir(dirname(__DIR__));

$loader = require_once 'vendor/autoload.php';

$app = new Application();
$cli = false;

require_once('app/bootstrap.php');


$app->error(function (\Exception $e, $code) use ($app) {
    if(404 === $code) {
        return;
    }
    return new JsonResponse(array('application error', json_encode($e->getMessage())));
});

$app->run();