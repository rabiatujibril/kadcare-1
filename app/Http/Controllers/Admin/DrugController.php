<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    //
    public function index(){
        $drugs = Drug::with('category', 'type')->orderBy('code', 'asc')->get();
        return view('pages.drugs.index', compact('drugs'));
    }
}
