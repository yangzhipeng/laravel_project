<?php

  namespace App\Http\Middleware;

  use Closure;

  class RouteParameter
  {
     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
     {
         // or $user = $request->route('user');
         $user = $request->route()->parameter('user');  //{user}
         $role = $request->route()->parameter('role');  //{role}
         dd($user, $role);
         $parameters = $request->route()->parameter();  //['user' => {user}, 'role' => {role}]
         dd($parameters['user'], $parameters['role']);
         return $next($request);
     }
  }