<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use App\Models\Facility;
use App\Models\Lga;
use App\Models\RequestItem;
use App\Notifications\SMS;
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

    public function approve(Request $request){
        $item_id = $request->item_id;
        $approved_quantity = $request->approved_quantity;
        for($i = 0; $i<count($request->item_id); $i++){
            $item = RequestItem::find($item_id[$i]);
            if(!$item)
                $item = new RequestItem();
            $item->approved_quantity = $approved_quantity[$i];
            $item->save();
        }
        $req = \App\Models\Request::where('id', $item->request_id)->first();
        if($req){
            $req->status = \App\Models\Request::STATUS_APPROVED;
            if($req->save()){
                $facility = Facility::find($req->facility_id);
                if($facility)
                    if(!is_null($facility->phone))
                        SMS::sendSMS($facility->phone, SMS::SMS_MESSAGE['request_approved'], );
            }
        }
//        return SMS::getBalance();
//        return SMS::updateInfo();

        return back()->with('success', 'Approved successfully');
    }

    public function cost(Request $request){
        $item_id = $request->item_id;
        $unit_price = $request->unit_price;
        for($i = 0; $i<count($request->item_id); $i++){
            $item = RequestItem::find($item_id[$i]);
            if(!$item)
                $item = new RequestItem();
            $item->unit_price = $unit_price[$i];
            $item->status = RequestItem::STATUS_COSTED;
            $item->save();
        }
        $req = \App\Models\Request::where('id', $item->request_id)->first();
        if($req){
            $req->status = \App\Models\Request::STATUS_COSTED;
            $req->amount = $req->getAmount();
            if($req->save()){
                $facility = Facility::find($req->facility_id);
                if($facility)
                    if(!is_null($facility->phone))
                        SMS::sendSMS($facility->phone, SMS::SMS_MESSAGE['request_costed'], );
            }
        }
        return back()->with('success', 'Costed successfully');
    }

    public function receive(Request $request){
        $item_id = $request->item_id;
        $delivered_quantity = $request->delivered_quantity;
        for($i = 0; $i<count($request->item_id); $i++){
            $item = RequestItem::find($item_id[$i]);
            if(!$item)
                $item = new RequestItem();
            $item->delivered_quantity = $delivered_quantity[$i];
            $item->save();
        }
        $req = \App\Models\Request::where('id', $item->request_id)->first();
        if($req){
            $req->status = \App\Models\Request::STATUS_DELIVERED;
            if($req->save()){
                $facility = Facility::find($req->facility_id);
                if($facility)
                    if(!is_null($facility->phone))
                        SMS::sendSMS($facility->phone, SMS::SMS_MESSAGE['request_delivered'], );
            }
        }
        return back()->with('success', 'Delivered successfully');
    }

    public function cancel(Request $request){
        $req = \App\Models\Request::where('id', $item->request_id)->first();
        if($req){
            $req->status = \App\Models\Request::STATUS_DELIVERED;
            if($req->save()){
                $facility = Facility::find($req->facility_id);
                if($facility)
                    if(!is_null($facility->phone))
                        SMS::sendSMS($facility->phone, SMS::SMS_MESSAGE['request_delivered'], );
            }
        }
        return back()->with('success', 'Delivered successfully');
    }

}
