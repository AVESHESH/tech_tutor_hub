<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
            return response()->json(['user'=>$user,'message'=>'Login Success']);

        }else{

            return response()->json(['message'=>'Invalid email or password!']);
        }



       }

       catch(\Exception $e){
        return response()->json(['error'=>$e->getMessage(),500]);

       }
       


    }
}
