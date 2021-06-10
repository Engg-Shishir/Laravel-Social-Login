<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;
use App\Models\Social;

class SocialController extends Controller
{
    // Call Github SignIn Page
    function CallGithubSignInPage(){
        // Github Builtin Proces to show SignIn Page
        $gitHubCallservice = Socialite::driver('github')->redirect();
        return $gitHubCallservice;
    }
    
}
