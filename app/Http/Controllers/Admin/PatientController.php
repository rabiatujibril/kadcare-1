<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    public function index(){
        $patients = Patient::with('facility')->orderBy('number', 'asc');
        if(session('facility')->id)
            $patients = $patients->where('facility_id', session('facility')->id);
        $patients = $patients->get();
        return view('pages.patients.index', compact('patients'));
    }

    public function show(Patient $patient){
        $patient = Patient::where('id',$patient->id)->with('encounters', 'createdBy', 'facility')->first();
        return view('pages.patients.show', compact('patient'));
    }
}
