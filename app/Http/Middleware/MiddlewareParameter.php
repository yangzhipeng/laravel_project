<?php

  namespace App\Http\Middleware;

  use Auth;
  use Closure;
  use Illuminate\Http\Response;

  class MiddlewareParameter
  {
       /**
       * Handle an incoming request.
       *
       * @param  \Illuminate\Http\Request $request
       * @param  \Closure                 $next
       * @param                           $role
       * @param                           $action
       * @param                           $data
       *
       * @return mixed
       */
       public function handle($request, Closure $next, $role, $action, $data)
       {
           //中间件的handle函数中，第三个形参，就是用来接收“advisor,show,comment”传递过来的字符串的。
           dd($role, $action, $data); //'advisor', 'show', 'comment'

           if (Auth::check() && (Auth::user()->type === $role)) {
               return $next($request);
           }

           return abort(Response::HTTP_UNAUTHORIZED, 'You must log in to access the resource.', ['Set-Cookie' => 'Laravel=0; path=/; Expires=Thu, 01-Jan-1970 00:00:00 GMT; Secure',]);
       }
  }