<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HelperController;
use App\Repositories\AuthRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showAdminLoginForm()
    {
        return view('admin.login');
    }
    public function processLogin(Request $request, AuthRepository $authRepository)
    {
        // dd($request->only('email'));
        // exit;
        $submited_data = array(
            'email'  => $request->email,
            'password'  => $request->password,
        );
        $rules = array(
            'email'  => 'required',
            'password' => 'required',
        );
        $messages = array(
            'email.required'            => 'Please Enter Your Email',
            'password.required'         => 'Please Enter Your Password',
        );
        $validate = HelperController::validate_data('Redirect', $submited_data, $rules, $messages);
        if ($validate->original != null) {
            //return $validate->original['data'];
            return $authRepository->login($submited_data, 'admin', 'admin.dashboard');
        } else {
            return $validate;
        }
    }
}
