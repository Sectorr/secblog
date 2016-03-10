<?php

namespace App\Middleware;

use Sectorr\Core\Contracts\MiddlewareContract;
use Sectorr\Core\Http\Redirect;
use Sectorr\Core\Auth\Auth;

class Auth implements MiddlewareContract {

    public static function allow()
    {
        if(Auth::check()) {
            return true;
        }
        return Redirect::route('login');
    }
}