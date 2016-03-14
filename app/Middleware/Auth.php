<?php

namespace App\Middleware;

use Sectorr\Core\Contracts\MiddlewareContract;
use Sectorr\Core\Http\Redirect;

class Auth implements MiddlewareContract {

    public static function allow()
    {
        if(\Sectorr\Core\Auth\Auth::check()) {
            return true;
        }
        return Redirect::route('login');
    }
}
