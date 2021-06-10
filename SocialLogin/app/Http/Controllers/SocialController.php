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

    
    // Github Call Back With Data
    function GithubCallback(){

        // Github Builtin CallBack Proces
        $user = Socialite::driver('github')->stateless()->user();

        // Access User Data
        $token = $user->token;
        $Userid = $user->getId();
        $nickName =  $user->getNickname();
        $name = $user->getName();
        $email = $user->getEmail();
        $avatar = $user->getAvatar();


        // Put User data in Session
        Session::put('token',$token);
        Session::put('userid',$Userid);
        Session::put('nickName',$nickName);
        Session::put('email',$email);
        Session::put('name',$name);
        Session::put('avatar',$avatar);

        $countvalue = Social::where('email',$email)->count();

        if($countvalue==0){
            Social::insert([
                'name'=>$name,
                'nick_name'=>$nickName,
                'email'=>$email,
                'user_id'=>$Userid,
                'image'=>$avatar,
            ]);
            return redirect('/dashboard');
        }else{
            return redirect('/dashboard');
        }
    }



    // User Dashboard
    function dashboard(){
        return view('dashboard');
    }


    // User Logout
    function logout(Request $request){
        $request->Session()->flush();
        return redirect('/');
    }
    
}
