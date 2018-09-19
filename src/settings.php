<?php
  return[
      'settings' => [
      'determineRouteBeforeAppMiddleware' => false,
      'displayErrorDetails' => true,
         'logger' => [
             'name' => 'slim-app',
             'path' => __DIR__.'/../logs/app.log',
          ],
          'renderer' => [
              'template_path' => __DIR__.'/../templates/'
          ],
            'db' => [
              'driver' => 'mysql',
              'host' => 'localhost',
              'database' => 'apiRestDB',
              'username' => 'apiRest1',
              'password' => '12345',
              'charset' => 'utf8',
              'collation' => 'utf8_unicode_ci',
            ],
            "jwt" => [
            'secret' => 'supersecretkeyyoushouldnotcommittogithub'
        ]
      ]
  ];
