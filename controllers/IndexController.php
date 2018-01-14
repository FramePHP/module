<?php

namespace App\Site\Controllers;

use FramePHP\Http\Request;
use FramePHP\Http\Response;

class IndexController extends SiteController
{

  public function getIndex()
  {
    return view("content.index");
  }
}
