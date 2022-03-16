<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReadMailController extends Controller
{
    public function index(Request $request){
        return view('admin.mailbox.read-mail');
    }
}
