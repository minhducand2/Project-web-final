<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vivoController extends Controller
{
    public function index(){

        return view('home.mobile phone.vivi');
    }
}
