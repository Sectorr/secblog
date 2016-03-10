<?php

namespace App\Middleware;

use Sectorr\Core\Auth\Auth;
use Sectorr\Core\Contracts\MiddlewareContract;
use Sectorr\Core\Http\Redirect;

class Guest implements MiddlewareContract {

    public static function allow()
    {
        if(! Auth::check()) {
            return true;
        }
        return Redirect::route('home');
    }
}