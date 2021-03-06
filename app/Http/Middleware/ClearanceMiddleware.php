<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class ClearanceMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $user = User::all()->count();

        if (!($user == 1)) {
            if (Auth::user()->hasRole('Super Admin') || Auth::user()->hasPermissionTo('Manage Specialist')) {
                return $next($request);
            } else {
                abort('401');
            }
        }
        return $next($request);
    }

}
