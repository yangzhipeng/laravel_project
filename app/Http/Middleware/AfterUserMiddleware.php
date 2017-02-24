<?php

namespace App\Http\Middleware;

use Closure;

class AfterUserMiddleware
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

        if($request->input('name') != 'yzp'){
            echo '账号输入错误！';
            echo '<a href="addUser">点击返回</a>';
            exit;
        }
        return $next($request);
    }
}
