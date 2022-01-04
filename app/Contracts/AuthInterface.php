<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface AuthInterface
{
    public function login(array $credentials = array(), string $guard, $redirect_route, string $response_type);
}
