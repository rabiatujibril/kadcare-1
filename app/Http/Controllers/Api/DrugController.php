<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use Illuminate\Http\Request;

class DrugController extends BaseController
{
    //
    public function index(Request $request){
        $user = $request->user();
        $drugs = Drug::with('category', 'type')->orderBy('code', 'asc');

        $drugs = $drugs->get();
        if($drugs)
            return $this->sendResponse($drugs, 'Success');
        return $this->sendError('Failure', ['error'=>'Something went wrong']);
    }
}
