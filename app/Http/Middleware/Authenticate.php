<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class Authenticate
{
    public function handle($request, Closure $next, ...$guards)
    {
        if ($this->auth->guard()->guest()) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
