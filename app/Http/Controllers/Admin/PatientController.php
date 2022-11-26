<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    public function index(){
        $patients = Patient::facility()->orderBy('number', 'asc')->get();
        return view('pages.patients.index', compact('patients'));
    }
}
