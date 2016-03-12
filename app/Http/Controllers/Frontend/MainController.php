<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

use JsValidator;
use Validator;

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
        $validationRules=[
                'age' => 'required',
                'email' => 'required',
                'name' => 'required',
                'password' => 'required',
                'password_confirm' => 'required|same:password',

        ];
        $validator = JsValidator::make($validationRules);
    	return view('frontend/register')->with(['validator' => $validator]);
    }

    public function store(Request $request) {
        $validationRules=[
            'age' => 'required',
            'email' => 'required',
            'name' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ];
        $validator = JsValidator::make($validationRules);
        $params = $request->all();
        $validate = Validator::make($params, $validationRules);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
            exit();
        } else {
            $valid_email = User::where('email', $params['email'])->first();
            if (empty($valid_email)) {
                $user = new User();
                $user->age = $params['age'];
                $user->email = $params['email'];
                $user->gender  = $params['gender'];
                $user->is_admin = 0;
                $user->name = $params['name'];
                $user->password = sha1($params['password']);
                $user->timestamps = true;

                $saved  = $user->save();
                return redirect('/home')->with(['message'=>'Se ha registrado el usuario exitosamente']);
            } else {
                 return view('frontend/register')->with(['validator' => $validator,'error_message'=>'Esta direcci&oacute;n de correo ya ha sido usada']);
            }
        }
    }

    public function about_us() {
    	return view('frontend/about_us');
    }

    public function contact() {
    	return view('frontend/contact');
    }

    public function send_contact(){
      $contact_name = $_POST['name']
      $contact_mail = $_POST['mail']
      $contact_message = $_POST['message']
      return "hola"
    }

}
