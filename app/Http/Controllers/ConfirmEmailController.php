<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ConfirmEmailController extends Controller
{
    public function index()
    {
        $user = User::where('confirm_token', request()->token)->first();

        if ($user) {
            $user->confirm();
            //session()->flash('success','Your email has been confirmed.');
            return redirect('/');
        }else{
            session()->flash('error','Mail Confirmation failed.');
            return redirect('/');
        }
    }
}
