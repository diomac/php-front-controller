<?php
/**
 * Created by PhpStorm.
 * User: Dionisio Gabriel Rigo de Souza Machado (https://github.com/diomac)
 * Date: 25/12/2018
 * Time: 10:34
 */

include '../../bootstrap.php';

if (!@include('../../vendor/autoload.php')) {
    die('Could not find autoloader');
}

use Diomac\API\App;

$config = [
    'namespaceResources' => ['FrontController', 'api', 'v1'],
    'useCache' => false,
    'resources' => [
        'ExampleAPI'
    ],
    'contentTypeExceptions' => 'application/json',
    'namespaceGuards' => ['api', 'secure']
];

$app = new App($config);
$app->exec();
