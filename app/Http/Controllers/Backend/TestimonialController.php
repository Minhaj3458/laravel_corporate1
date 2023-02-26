<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonial = Testimonial::latest()->get();
        return view('backend_page.testimonial.manage_testimonial',compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend_page.testimonial.create_testimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|max:255',
            'name' => 'required|max:255',
            'profession' => 'required|max:255',
            'description' => 'required|max:300',
        ]);

        $testimonial = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->profession = $request->profession;
        $testimonial->description = $request->description;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/testimonial/'),$image_name);
            $testimonial->image = $image_name;
        }
        $save = $testimonial->save();
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
        $testimonial = Testimonial::find($id);
        return view('backend_page.testimonial.update_testimonial',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'profession' => 'required|max:255',
            'description' => 'required|max:300',
        ]);

        $testimonial = Testimonial::find($id);
        $testimonial->name = $request->name;
        $testimonial->profession = $request->profession;
        $testimonial->description = $request->description;
        if($request->hasfile('image'))
        {
            if($testimonial->image){
                $img_delete = Testimonial::where("image",$testimonial->image);
                if($img_delete){
                  unlink("frontend/img/testimonial/".$testimonial->image);
                 }
               }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/testimonial/'),$image_name);
            $testimonial->image = $image_name;
        }
        $save = $testimonial->save();
        if($save){
          return redirect('author/manage/testimonial')->with('message','create data successfully!');
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
        $testimonial = Testimonial::find($id);

        if($testimonial->image){
            unlink("frontend/img/testimonial/".$testimonial->image);
        }
        $delete = $testimonial->delete();
        if($delete){
          return redirect('author/manage/testimonial')->with
          ('message','This data delete successfully!');
        }
        else{
         return redirect()->back()->with('message_warring','something is wrong!');
        }
    }
}
