<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends BaseController
{
    //
    public function index(Request $request){
        $user = $request->user();
        $facilities = Facility::with('ward')->orderBy('code', 'asc');

        $facilities = $facilities->get();
        if($facilities)
            return $this->sendResponse($facilities, 'Success');
        return $this->sendError('Failure', ['error'=>'Something went wrong']);
    }
}
