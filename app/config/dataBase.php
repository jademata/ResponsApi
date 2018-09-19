<?php
use Illuminate\Database\Capsule\Manager as DataBase;

$database = new DataBase();
$database->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'apiRestDB',
            'username' => 'apiRest',
            'password' => 'Umg#18rest',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ]);
$database->setAsGlobal();
$database->bootEloquent();
