<?php

namespace SocialNet\Http\Controllers;

use Illuminate\Http\Request;
use SocialNet\Http\Requests;
use SocialNet\Http\Controllers\Controller;

class TestController extends Controller {
   public function index() {
      echo "<br>Test Controller.";
   }
}