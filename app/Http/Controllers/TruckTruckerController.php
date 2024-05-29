<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Models\Trucker;
use Illuminate\Http\Request;

class TruckTruckerController extends Controller
{
    public function asociar(){

        $truck = Truck::all();
        $trucker = Trucker::all();
       
        return view('truck_trucker.asociar',compact('truck','trucker'));

    }

    public function store(Request $request){

        $truck=Truck::find($request->truck_id);
        $truck->roles()->attach($request->trucker_id);

    }
}
