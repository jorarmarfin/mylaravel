<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    public function index()
    {
        return response(['messaje'=>'index']);
    }
    public function client()
    {
        return response(['messaje'=>'Client']);
    }
}
