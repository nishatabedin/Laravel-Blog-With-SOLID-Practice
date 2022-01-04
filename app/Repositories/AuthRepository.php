<?php

namespace App\Repositories;

use App\Contracts\AuthInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthInterface
{
    public function login(array $credentials = array(), string $guard, $redirect_route = null, string $response_type = 'Redirect')
    {

        if (Auth::guard($guard)->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            if ($response_type == 'Redirect' and $redirect_route != null) {
                return redirect()->route($redirect_route);
            } else if ($response_type == 'Json' and $guard == 'api') {
            }
        } else {
            if ($response_type != 'Json' and $guard != 'api') {
                return back()
                    ->withInput(array("email" => $credentials['email']))
                    ->withErrors(['Invalid Credentials']);
            } else if ($response_type == 'Json' and $guard == 'api') {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
        }
    }
}
