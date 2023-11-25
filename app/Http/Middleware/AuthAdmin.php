<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // nếu user đã đăng nhập

        if (Auth::check())
        {
            $user = Auth::user();
            // nếu level =1 (admin), status = 1 (actived) thì cho qua.
            if ($user->active == 1  && $user->level >= 1)
            {
                return $next($request);
            }
            else
            {
                dd(1);
                Auth::logout();
                return redirect()->route('getLogin');
            }
        } else
            return redirect('panel/login');
    }
    }


