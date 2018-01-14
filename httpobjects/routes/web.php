<?php
namespace App\Site\Controllers;

return [
  "/" => [
    'method' => 'GET', 'controller' => [IndexController::class, 'getIndex']
  ],
  "/home" => [
    'method' => 'GET', 'controller' => [HomeController::class]
  ],
  "blog" => [
    'method' => 'GET', 'controller' => [BlogController::class, 'getPosts']
    ]
];
