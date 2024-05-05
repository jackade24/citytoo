<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Api\BaseUserController;
use App\Http\Requests\Api\User\Auth\ForgetPasswordRequest;
use App\Http\Requests\Api\User\Auth\RegisterRequest;
use App\Http\Requests\Api\User\Auth\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseUserController
{
    public function login(UserLoginRequest $request)
    {
        list( $username , $password , $remember ) = $request->validated() ;

        //user already check exist in request
        $user = User::whereEmail($username)->first();

        if(Hash::check($password , $user['password'])){

        }
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated() ;
    }

    public function forgot_password(ForgetPasswordRequest $request)
    {
        $data = $request->validated() ;
    }

    public function logout(UserLoginRequest $request)
    {
        $data = $request->validated() ;
    }

}
