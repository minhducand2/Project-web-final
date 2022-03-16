<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderManagementCodeController extends Controller
{
    public function index(Request $request){
        return view('admin.tables.order-management');
    }
}
