<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function detail($id) {
    	return view('frontend/payment/detail')->with('id',$id);
    }

	public function show() {
    	return view('frontend/payment/list');
    }

	public function summary() {
    	return view('frontend/payment/summary');
    }    
}
