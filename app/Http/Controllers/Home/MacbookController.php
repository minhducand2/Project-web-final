<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MacbookController extends Controller
{
    public function index(){

        return view('home.laptop.macbook');
    }
}
