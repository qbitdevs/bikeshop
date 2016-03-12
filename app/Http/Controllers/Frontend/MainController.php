<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function categories() {
    	return view('frontend/categories');
    }

    public function index() {
    	return view('frontend/home');
    }

    public function login() {
    	return view('frontend/login');
    }

    public function register() {
    	return view('frontend/register');
    }
}
