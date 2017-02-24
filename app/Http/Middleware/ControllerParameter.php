<?php

    namespace App\Http\Middleware;

    use Closure;

    class ControllerParameter
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next, $role)
        {
            $request->attributes->add(compact('role')); // 'client'
            return $next($request);
        }
    }


?>