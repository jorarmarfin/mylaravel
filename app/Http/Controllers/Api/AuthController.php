<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $Logindata = $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);
        if (!auth()->attempt($Logindata)) {
            return response(['message'=>'Invalid credential']);
        }
        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        return response(['user'=>auth()->user(),'access_token'=>$accessToken]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $Validatedata = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required',
            'password' => 'required|confirmed',
        ]);
        $user = User::create($Validatedata);
        $accessToken = $user->createToken('authToken')->accessToken;
        return response(['user'=>$user,'access_token'=>$accessToken]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
