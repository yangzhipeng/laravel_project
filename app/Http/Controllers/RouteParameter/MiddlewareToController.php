<?php

  namespace App\Http\Controllers\RouteParameter;

  use Illuminate\Http\Request;
  use App\Http\Controllers\Controller;

  class MiddlewareToController extends Controller
  {
      public function index(Request $request)
      {
          dd($request->get('role'));
      }

  }