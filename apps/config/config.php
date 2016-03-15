<?php

defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '',
        'dbname'      => 'test',
        'charset'     => 'utf8',
    ),
    
    /*'application' => array(
        'controllersDir' => APP_PATH . '/apps/controllers/',
        'modelsDir'      => APP_PATH . '/apps/models/',
        'migrationsDir'  => APP_PATH . '/apps/migrations/',
        'viewsDir'       => APP_PATH . '/apps/views/',
        'pluginsDir'     => APP_PATH . '/apps/plugins/',
        'libraryDir'     => APP_PATH . '/apps/library/',
        'cacheDir'       => APP_PATH . '/apps/cache/',
        'baseUri'        => '/imagesweb/',
    )*/
));
