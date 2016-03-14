<?php

use Phalcon\Mvc\Router;

$router = new Router();

$router->add(
    "/login",
    array(
        'controller' => 'login',
        'action'     => 'index'
    )
);

$router->add(
    "/products/:action",
    array(
        'controller' => 'products',
        'action'     => 1
    )
);

return $router;