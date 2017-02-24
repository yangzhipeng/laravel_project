<?php

  namespace App\Http\Controllers\RouteParameter;

  use Illuminate\Http\Request;
  use App\Http\Controllers\Controller;

  class MiddlewareParameterToMiddlewareController extends Controller
  {
      public function index()
      {
          return "All";
      }
      public function show()
      { 
        $test = "hello";
         var_dump($test);
      }
  }