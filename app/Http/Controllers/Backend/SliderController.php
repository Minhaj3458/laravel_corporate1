<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::latest()->get();
        return view('backend_page.slider.manage_slider',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend_page.slider.create_slider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title1' => 'required|max:255',
            'title2' => 'required|max:255',
            'image' => 'required|max:300',
        ]);

        $slider = new Slider;
        $slider->title1 = $request->title1;
        $slider->title2 = $request->title2;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/slider/'),$image_name);
            $slider->image = $image_name;
        }
        $save = $slider->save();
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
        $slide = Slider::find($id);
        return view('backend_page.slider.update_slider',compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title1' => 'required|max:255',
            'title2' => 'required|max:255',
        ]);

        $slider = Slider::find($id);
        $slider->title1 = $request->title1;
        $slider->title2 = $request->title2;
        if($request->hasfile('image'))
        {
            if($slider->image){
                $img_delete = Slider::where("image",$slider->image);
                if($img_delete){
                  unlink("frontend/img/slider/".$slider->image);
                 }
               }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/slider/'),$image_name);
            $slider->image = $image_name;
        }
        $save = $slider->save();
        if($save){
          return redirect('author/manage/slider')->with('message','update data successfully!');
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
        $slider = Slider::find($id);

        if($slider->image){
            unlink("frontend/img/slider/".$slider->image);
        }
        $delete = $slider->delete();
        if($delete){
          return redirect('author/manage/slider')->with
          ('message','This data delete successfully!');
        }
        else{
         return redirect()->back()->with('message_warring','something is wrong!');
        }

    }
}
