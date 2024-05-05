<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends CoreController
{
    public function __invoke()
    {
        $user = User::first();
        $token = $user->createToken('tset')->plainTextToken;
        
        return  $token;
    }
}
