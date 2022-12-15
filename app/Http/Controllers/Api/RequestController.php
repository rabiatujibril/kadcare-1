<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    //
    public function index(Request $request){
        $user = $request->user();
        $requests = \App\Models\Request::orderBy('number', 'desc');

        $requests = $requests->get();
        if($requests)
            return $this->sendResponse($requests, 'Success');
        return $this->sendError('Failure', ['error'=>'Invalid username or password.']);
    }
}
