<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Lib\Router;
use App\Lib\Request;
use App\Lib\Response;

use App\Controller\UserController;

Router::get('/', function (Request $req, Response $res) {
    $res->status(404);
    $res->toJSON([
        "message" => "not found"
    ]);
});

Router::get('/user', function (Request $req, Response $res) {
    return UserController::getAll($req, $res);
});


Router::get('/user/([0-9]*)', function (Request $req, Response $res) {
    return UserController::get($req, $res);
});

Router::post('/user', function (Request $req, Response $res) {
    return UserController::post($req, $res);
});


Router::put('/user/([0-9]*)', function (Request $req, Response $res) {
    return UserController::put($req, $res);
});

Router::delete('/user/([0-9]*)', function (Request $req, Response $res) {
    $res->status(200);
    $res->toJSON([
        'post' =>  ['id' => "00000"],
        'status' => 'ok'
    ]);
});