<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(AuthRequest $request){

        $confidential=$request->only('email','password');
       try{
        if(Auth::attempt($confidential)){
            $user=Auth()->user();

            return redirect('admin/dashboard')->with('success','Welcome '.$user->name);

        }else{

            return back()->with('error','Invalid email or password!');
        }

       }

       catch(\Exception $e){
        return back()->with('error',$e->getMessage());

       }
       
    }
}
