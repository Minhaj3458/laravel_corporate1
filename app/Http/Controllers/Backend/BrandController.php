<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = Brand::latest()->get();
        return view('backend_page.brand.manage_brand',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend_page.brand.create_brand');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand_name' => 'required|max:255',
            'image' => 'required|max:255',

        ]);

        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->description = $request->description;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/brand/'),$image_name);
            $brand->image = $image_name;
        }
        $save = $brand->save();
        if($save){
          return redirect()->back()->with('message','create data successfully!');
        }
        else{
          return redirect()->back()->with('message','Something is Wrong!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = Brand::find($id);
        return view('backend_page.brand.update_brand',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'brand_name' => 'required|max:255',

        ]);

        $brand = Brand::find($id);
        $brand->brand_name = $request->brand_name;
        $brand->description = $request->description;
        if($request->hasfile('image'))
        {
            if($brand->image){
                $img_delete = Brand::where("image",$brand->image);
                if($img_delete){
                  unlink("frontend/img/brand/".$brand->image);
                 }
               }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/brand/'),$image_name);
            $brand->image = $image_name;
        }
        $save = $brand->save();
        if($save){
          return redirect('author/manage/brand')->with('message','update data successfully!');
        }
        else{
          return redirect()->back()->with('message','Something is Wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::find($id);
        if($brand->image){
            unlink("frontend/img/brand/".$brand->image);
        }
        $delete = $brand->delete();
        if($delete){
            return redirect('author/manage/brand')->with('message','delete data successfully!');
        }
        else{
          return redirect()->back()->with('message','Something is Wrong!');
        }
    }
}
