<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComparePageController extends Controller
{
    public function index(){

        return view('home.compare-page.index');
    }
}
