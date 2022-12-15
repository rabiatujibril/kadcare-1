<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiscController extends Controller
{
    //
    public function destroy(Request $request){
        $model = "App\Models\\".$request->model_name;
        $record = $model::find($request->model_id);
        if($record->delete())
            return back()->with('success', 'Record deleted successfully');
        return back()->with('error', 'Something went wrong');
    }
}
