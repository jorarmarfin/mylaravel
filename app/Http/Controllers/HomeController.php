<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MiPaquete;
use LaravelYoutube;
use LaravelDspace;

class HomeController extends Controller
{
    public function index()
    {
        $data = LaravelYoutube::getData('https://www.youtube.com/watch?v=cCwWvAxoQdE');
        dd($data->type);
        return $data;
        
    }
    public function dspace()
    {
        $data = LaravelDspace::index();
        dd($data);
    }
}
