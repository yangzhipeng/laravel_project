<?php

    namespace App\Http\Middleware;

    use Closure;
    use Redirect;

    class BeforeMiddle
    {
        public function handle($request, Closure $next)
        {   
            //该方法的形参中的“$request”是请求类，”$next”是流水线（流水线式laravel框架的一个核心流程概念，有兴趣可去看源码，里面的类叫pipeLine）中下一个需要运行的闭包函数。
            //这里的$next就当成控制器就可以
            //echo "I'm halo_young!<br/>";
            //return Redirect::to('/');
            if($request->input('age') <= 20){
                echo '年龄不能小于20';
                echo '<a href="addUser">点击返回</a>';
                exit;
            }
            return $next($request);
        }
        public function terminate($request, $response)
        {
            //这里是响应后调用的方法
            echo "this is terminate middleware named test <br/>";
        }
    }


?>