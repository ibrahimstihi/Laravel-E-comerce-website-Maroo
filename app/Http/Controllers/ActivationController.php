<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivateYourAccount;

//activat account
class ActivationController extends Controller
{
    public function activateUserAccount($code){
        $user = User::whereCode($code)->first();
        $user->code = null;
        $user->update([
            "active"=> 1
        ]);
        Auth::login($user);
        return redirect("/")->withSuccess("connecté");
    }
//resend code

    public function resendActivationCode($email){
        $user = User::whereEmail($email)->first();
        if($user->active){
            return redirect("/");
        }
        Mail::to($user)->send(new ActivateYourAccount($user->code));
        return ("/login")->withSuccess("le lien d'activation est envoyé");
    }
}
