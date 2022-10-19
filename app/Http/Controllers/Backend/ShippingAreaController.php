<?php

namespace App\Http\Controllers\Backend;

use App\Models\ShipState;
use App\Models\ShipDistrict;
use App\Models\ShipDivision;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

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

    public function DivisionEdit($id){
        $division = ShipDivision::findOrFail($id);
        return view ('backend.ship.division.edit_division',compact('division'));
    }

    public function DivisionUpdate(Request $request, $id){
        ShipDivision::findOrFail($id)->update([
            'division_name' => $request->division_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Ship Division Updated Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('manage.division')->with($notification);
    }


    public function DivisionDelete($id){
        ShipDivision::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Ship Division Deleted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }

    public function DistrictView(){
        $division = ShipDivision::orderBy('division_name', 'ASC')->get();
        $district = ShipDistrict::with('division')->orderBy('id','DESC')->get();

        return view ('backend.ship.district.view_district',compact('division','district'));
    }

    public function DistrictStore(Request $request){
        $request->validate([
            'division_id' => 'required',  
    		'district_name' => 'required', 
        ]);

        ShipDistrict::insert([
            'division_id' => $request->division_id,
            'district_name'=> $request->district_name,
            'created_at' =>Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Ship District Added Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);

    }

    public function DistrictEdit($id){
        $division = ShipDivision::orderBy('division_name','ASC')->get();
        $district = ShipDistrict::findOrFail($id);
        return view('backend.ship.district.edit_district', compact('district','division'));
    }

    public function DistrictUpdate(Request $request, $id){
        ShipDistrict::findOrFail($id)->update([
            'division_id' => $request->division_id,
            'district_name'=> $request->district_name,
            'created_at' =>Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Ship District Updated Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('manage.district')->with($notification);
    }

    public function DistrictDelete($id){
        ShipDistrict::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Ship District Deleted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }

    public function StateView(){
        $division = ShipDivision::orderBy('division_name','ASC')->get();
        $district = ShipDistrict::orderBy('district_name','ASC')->get();
        $state = ShipState::with('division','district')->orderBy('id','ASC')->get();

        return view('backend.ship.state.view_state', compact('district','division','state'));
    }

    public function StateStore(Request $request){
        $request->validate([
            'division_id' => 'required',  
            'district_id' => 'required',  
    		'state_name' => 'required', 
        ]);

        ShipState::insert([
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_name'=> $request->state_name,
            'created_at' =>Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Ship District Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function StateEdit($id){
        $division = ShipDivision::orderBy('division_name','ASC')->get();
        $district = ShipDistrict::orderBy('district_name','ASC')->get();
        $state = ShipState::findOrFail($id);

        return view('backend.ship.state.edit_state', compact('district','division','state'));
    }

    public function StateUpdate(Request $request, $id){
        ShipState::findOrFail($id)->update([
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_name'=> $request->state_name,
            'created_at' =>Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Ship State Updated Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('manage.state')->with($notification);
    }

    public function StateDelete($id){
        ShipState::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Ship State Deleted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }
}
