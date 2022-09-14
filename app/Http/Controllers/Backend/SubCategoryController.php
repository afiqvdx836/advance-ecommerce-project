<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    public function SubCategoryView(){
        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $subcategory = SubCategory::latest()->get();
        return view('backend.category.subcategory_view', compact('subcategory','categories'));
    }


    public function SubCategoryStore(Request $request){
        $request->validate([
            'category_id' => 'required',
            'subcategory_name_en' => 'required',
            'subcategory_name_hin' => 'required',
        ],[
            'category_id.required' => 'Please Select Any Option',
            'subcategory_name_en.required' => 'Please Enter Sub Category English',
            'subcategory_name_hin.required' => 'Please Enter Sub Category hindi',
        ]);

        SubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name_en' => $request->subcategory_name_en,
            'subcategory_name_hin' => $request->subcategory_name_hin,
            'subcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subcategory_name_en)),
            'subcategory_slug_hin' => str_replace(' ', '-',$request->subcategory_name_hin),

        ]);
    
        $notification = array(
			'message' => 'SubCategory Added Successfully',
			'alert-type' => 'success'
		);
        return redirect()->back()->with($notification);
    }

    public function SubCategoryEdit($id){
        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $subcategory = SubCategory::findOrFail($id);
        return view('backend.category.subcategory_edit', compact('subcategory','categories'));
    }

    public function SubCategoryUpdate(Request $request){
        $subcat_id = $request->id;

        SubCategory::findOrFail($subcat_id)->update([
            'category_id' => $request->category_id,
            'subcategory_name_en' => $request->subcategory_name_en,
            'subcategory_name_hin' => $request->subcategory_name_hin,
            'subcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subcategory_name_en)),
            'subcategory_slug_hin' => str_replace(' ', '-',$request->subcategory_name_hin),

        ]);
    
        $notification = array(
			'message' => 'SubCategory Added Successfully',
			'alert-type' => 'success'
		);
        return redirect()->route('all.subcategory')->with($notification);
    } // End Method

    public function SUbCategoryDelete($id){
        SubCategory::findOrFail($id)->delete();
        $notification = array(
			'message' => 'SubCategory Deleted Successfully',
			'alert-type' => 'success'
		);
        return redirect()->back()->with($notification);
    }

    ////////// THIS IS FOR SUB->SUBCATEGORY //////////
    public function SubSubCategoryView(){
        $categories = Category::orderBy('category_name_en', 'ASC')->get();
        $subsubcategory = SubSubCategory::latest()->get();
        return view('backend.category.sub_subcategory_view', compact('subsubcategory','categories'));
    }
}
