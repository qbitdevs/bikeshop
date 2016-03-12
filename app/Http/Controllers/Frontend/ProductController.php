<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function detail($id) {
    	return view('frontend/product/detail')->with('id',$id);
    }

	public function summary() {
    	return view('frontend/product/summary');
    }  
}
