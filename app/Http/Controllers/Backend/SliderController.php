<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function AllSlider(){
        $sliders = Slider::latest()->get();
        return view('backend.slider.sliders_view');
    } // end method
}
