<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller {

public function index() {
    $data = [
        ['name' => '山田たろう', 'mail' => 'taro@yamda'],
        ['name' => '田中はなこ', 'mail' => 'hanako@flower'],
        ['name' => '鈴木さちこ', 'mail' => 'sachico@happy']
    ];

    return view('hello.index',['data'=>$data]);
  }

}