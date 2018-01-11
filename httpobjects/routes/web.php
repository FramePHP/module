<?php

return [
  "/" => [
    'method' => 'GET', 'controller' => 'IndexController::getIndex'
  ],
  "/home" => [
    'method' => 'GET', 'controller' => HomeController::class
  ],
  "blog" => [
    'method' => 'ANY', 'controller' => [BlogController::class, 'getPosts']
    ]
];
