<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestAdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->segment(1) == 'admin' && Auth::guard('admin')->guest()) {
            return redirect('admin/');
        } else if ($request->segment(1) == 'admin' && Auth::guard('admin')->user()->status == 'Inactive') {
            Auth::guard('admin')->logout();
            // $this->helper->flash_message('danger', 'Admin deactivated your account..');
            return redirect('admin/');
        }
        return $next($request);
    }
}
