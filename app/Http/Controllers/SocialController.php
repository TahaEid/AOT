<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use \App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($service)
    {

        return Socialite::driver($service)->redirect();

    }

    protected function callback($service)
    {

        return $user = Socialite::with($service) -> user;

    }
}
