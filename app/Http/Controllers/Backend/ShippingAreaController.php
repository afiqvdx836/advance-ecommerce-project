<?php

namespace App\Http\Controllers\Backend;

use App\Models\ShipDivision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class ShippingAreaController extends Controller
{
    public function DivisionView(){
        $divisions = ShipDivision::orderBy('id', 'DESC')->get();
        return view('backend.ship.division.view_division',compact('divisions'));
    }

    public function DivisionStore(Request $request){
        
        $request->validate([
            'division_name' => 'required'
        ]);


        ShipDivision::insert([
            'division_name' => $request->division_name,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Ship Division Added Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);

    }
}
