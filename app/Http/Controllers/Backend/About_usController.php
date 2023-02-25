<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\About_us;

class About_usController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About_us::latest()->get();
        return view('backend_page.about_us.manage_about',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend_page.about_us.create_about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'sub_title1' => 'required|max:255',
            'sub_title2' => 'required|max:255',
            'sub_title3' => 'required|max:255',
            'sub_title4' => 'required|max:255',
            'number' => 'required|max:255',
            'about' => 'required|max:300',
            'image' => 'required|max:255',
        ]);

        $about = new About_us;
        $about->title = $request->title;
        $about->sub_title1 = $request->sub_title1;
        $about->sub_title2 = $request->sub_title2;
        $about->sub_title3 = $request->sub_title3;
        $about->sub_title4 = $request->sub_title4;
        $about->number = $request->number;
        $about->about = $request->about;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/about_us'),$image_name);
            $about->image = $image_name;
        }
        $save = $about->save();
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
        $about = About_us::find($id);
        return view('backend_page.about_us.update_about',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'sub_title1' => 'required|max:255',
            'sub_title2' => 'required|max:255',
            'sub_title3' => 'required|max:255',
            'sub_title4' => 'required|max:255',
            'number' => 'required|max:255',
            'about' => 'required|max:300',
        ]);

        $about = About_us::find($id);
        $about->title = $request->title;
        $about->sub_title1 = $request->sub_title1;
        $about->sub_title2 = $request->sub_title2;
        $about->sub_title3 = $request->sub_title3;
        $about->sub_title4 = $request->sub_title4;
        $about->number = $request->number;
        $about->about = $request->about;
        if($request->hasfile('image'))
        {
            if($about->image){
                $img_delete = About_us::where("image",$about->image);
                if($img_delete){
                  unlink("frontend/img/about_us/".$about->image);
                 }
               }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/about_us/'),$image_name);
            $about->image = $image_name;
        }
        $save = $about->save();
        if($save){
          return redirect('author/manage/about')->with('message','update data successfully!');
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
        $about = About_us::find($id);

        if($about->image){
            unlink("frontend/img/about_us/".$about->image);
        }
        $delete = $about->delete();
        if($delete){
          return redirect('author/manage/about')->with
          ('message','This data delete successfully!');
        }
        else{
         return redirect()->back()->with('message_warring','something is wrong!');
        }
    }
}
