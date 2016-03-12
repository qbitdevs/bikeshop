<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function add() {
    	return view('backend/category/add');
    }

    public function detail($id) {
    	return view('backend/category/detail')->with('id',$id);
    }

	public function show() {
    	return view('backend/category/list');
    }    

}
