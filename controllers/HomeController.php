<?php

namespace App\Site\Controllers;

use FramePHP\Http\Request;
use FramePHP\Http\Response;

class HomeController extends SiteController
{

  public function __invoke()
  {
    dump($this);
    return '<html>HEHEHEHE<html>';
  }
}
