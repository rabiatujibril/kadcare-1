<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function index(Request $request){
//        return $request->user();
        return $this->sendResponse(new UserResource($request->user()), 'User details fetched.');
    }
}
