<?php

namespace App\Http\Controllers\User;

use App\Models\ShipState;
use App\Models\ShipDistrict;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function DistrictGetAjax($division_id){
        $ship = ShipDistrict::where('division_id',$division_id)->orderBy('district_name', 'ASC')->get();

        return json_encode( $ship);
    }// method

    public function StateGetAjax($district_id) {
        $ship = ShipState::where('district_id',$district_id)->orderBy('state_name', 'ASC')->get();

        return json_encode( $ship);
    }
}
