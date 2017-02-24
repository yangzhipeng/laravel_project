<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Word\Message\Models\Word;
use RainLab\Blog\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Pagination\Presenter as PresenterContract;
use View;
use Response;
use Illuminate\Support\Facades\Session;  
use Illuminate\Support\Facades\Input;


class HelloController extends Controller
{
    //
  public function testapi(){

   // echo "hello, halo_young!";
    $time = date('Y',time())-1;
    $aaa = date("$time-01-01");
    test();
    echo $aaa;

  }

  public function sendCode(){
        require_once base_path('vendor/yunpian-sdk-php/YunpianAutoload.php');
    
        // 模板
        $num = rand(1000,9999);
        $smsOperator = new \SmsOperator();
        $mobil = Input::get('phone');
        $data['mobile'] = $mobil;
        $data['tpl_id'] = "1";
        $data['tpl_value'] =
        urlencode("#code#") . "="
        . urlencode($num) . "&"
        . urlencode("#company#") . "="
        . urlencode("云片网");
        $result = $smsOperator->tpl_send($data);
        Session::put('vercode',$num);
        return Response::make("ok",200);
       }

  public function reverse(){
    $pipes = [
    'Pipe1',
    'Pipe2',
    'Pipe3',
    'Pipe4',
    'Pipe5',
    'Pipe6',
  ];
  $pipes = array_reverse($pipes);

  var_dump($pipes);

  }

  public function rsum($v, $w){
    $v += $w;
    return $v;
  }

  public function sum(){

  }


  public function before()
  {
    //test();
    echo 'aa';
    //dd("aaaa");
  }

}
