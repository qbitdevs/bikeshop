<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function add() {
    	return view('backend/product/add');
    }

    public function detail($id) {
    	return view('backend/product/detail')->with('id',$id);
    }

	public function show() {
    	return view('backend/product/list');
    }    
}
