<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use App\Models\Lga;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    //
    public function index(){
        $requests = \App\Models\Request::with('items', 'facility')->get();
        return view('pages.requests.index', compact('requests'));
    }

    public function create(){
        $drugs = Drug::orderBy('code', 'asc')->get();
        return view('pages.requests.create', compact('drugs'));
    }

    public function store(Request $request){
        return $request;
    }

    public function show(\App\Models\Request $request){
        $request = $request->with('items', 'facility')->first();
        return view('pages.requests.show', compact('request'));
    }
}
