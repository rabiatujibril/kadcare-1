<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    //
    public function index(){
        $facilities = Facility::with('ward')->orderBy('code')->get();
        return view('pages.facilities.index', compact('facilities'));
    }
}
