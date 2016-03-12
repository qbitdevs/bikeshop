<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function detail($id) {
    	return view('frontend/order/detail')->with('id',$id);
    }

	public function show() {
    	return view('frontend/order/list');
    }
}
