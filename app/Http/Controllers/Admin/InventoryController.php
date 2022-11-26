<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    //
    public function index(){
        $inventories = Inventory::with('drug')->orderBy('id', 'asc')->get();
        return view('pages.inventories.index', compact('inventories'));
    }
}
