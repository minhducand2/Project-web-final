<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AudioEquipmentsController extends Controller
{
    public function index(){

        return view('home.accessory.audio-equipments');
    }
}
