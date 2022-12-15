<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
    //

    public function login(Request $request)
    {
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('KadCareApp')->plainTextToken;
            $success['name'] =  $user->fullname();

            return $this->sendResponse($success, 'User signed in');
        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Invalid username or password.']);
        }
    }
}
