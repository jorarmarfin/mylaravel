<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        return response(['message'=>'test']);
    }
    public function testpost(Request $request)
    {
        $data = $request->all();
        return response(['menssage'=>$data]);
    }
}
