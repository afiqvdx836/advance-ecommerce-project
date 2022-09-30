<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
class SliderController extends Controller
{
    public function AllSlider(){
        $sliders = Slider::latest()->get();
        return view('backend.slider.sliders_view',compact('sliders'));
    } // end method


    public function SliderStore(Request $request){

        $request->validate([

            'slider_img' => 'required',
    
        ],[
            'slider_img.required' => 'Please insert one image',
        ]);

        $image = $request->file('slider_img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(870,370)->save('upload/slider/'.$name_gen);
    	$save_url = 'upload/slider/'.$name_gen;
        Slider::insert([
            
            'title' => $request->title,
            'description' => $request->description,
            'slider_img' => $save_url,
            
        ]);

        $notification = array(
			'message' => 'Slider Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    }// end method
    
    public function SliderEdit($id){

        $slider = Slider::findOrFail($id);
        return view('backend.slider.sliders_edit', compact('slider'));

    }// method
    

    public function SliderUpdate(Request $request){
        
        $slider_id = $request->id;
        $old_img = $request->old_image;

        if($request->file('slider_img')){
            unlink($old_img);
            $image = $request->file('slider_img');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(870,370)->save('upload/slider/'.$name_gen);
            $save_url = 'upload/slider/'.$name_gen;

            Slider::findOrFail($slider_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'slider_img' => $save_url,
            ]);

            $notification = array(
                'message' => 'Slider Updated Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->route('all.slider')->with($notification);
    
        }
        else{
            Slider::findOrFail($slider_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'slider_img' => $save_url,

            ]);

            $notification = array(
                'message' => 'Slider Updated Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->route('all.slider')->with($notification);

        }

    

    }// end method

    public function SliderDelete($id){
        $slider = Slider::findOrFail($id);
        $img = $slider->slider_img;
        unlink($img);
        Slider::findOrFail($id);

        $notification = array(
            'message' => 'Slider Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }

    public function SliderInactive($id){

        Slider::findOrFail($id)->update(['status' => 0]);

    	$notification = array(
			'message' => 'Slider Inactive Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    }


    public function SliderActive($id){
        
        Slider::findOrFail($id)->update(['status' => 1]);

    	$notification = array(
			'message' => 'Slider Active Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    }
}
