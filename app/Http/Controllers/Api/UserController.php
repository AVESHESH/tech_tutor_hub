<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {


        try {


            $User = DB::transaction(function () use ($request) {
                $User = User::create(
                    [
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => $request->password,
                        'address' => $request->address,
                        'phone' => $request->phone

                    ]

                );
                return $User;
            });
            if ($User){
                return response()->json(['user'=>$User,'message'=>'User account is created sucessfully']);
            }
            else{
                return response()->json(['Message'=>'account not created']);
                
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage(), 500]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
