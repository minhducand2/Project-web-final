<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaptopAccessoriesController extends Controller
{
    public function index(){

        return view('home.accessory.laptop-accessories');
    }
}
