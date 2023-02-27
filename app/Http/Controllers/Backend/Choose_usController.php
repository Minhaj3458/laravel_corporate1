<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Choose_us;

class Choose_usController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $choose_us = Choose_us::latest()->get();
        return view('backend_page.choose_us.manage_choose_us',compact('choose_us'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend_page.choose_us.create_choose_us');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:400',
        ]);

        $choose_us = new Choose_us;
        $choose_us->title = $request->title;
        $choose_us->description = $request->description;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/choose_us/'),$image_name);
            $choose_us->image = $image_name;
        }
        $save = $choose_us->save();
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
        $choose_us = Choose_us::find($id);
        return view('backend_page.choose_us.update_choose_us',compact('choose_us'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:400',
        ]);

        $choose_us = Choose_us::find($id);
        $choose_us->title = $request->title;
        $choose_us->description = $request->description;
        if($request->hasfile('image'))
        {
            if($choose_us->image){
                $img_delete = Choose_us::where("image",$choose_us->image);
                if($img_delete){
                  unlink("frontend/img/choose_us/".$choose_us->image);
                 }
               }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/choose_us/'),$image_name);
            $choose_us->image = $image_name;
        }
        $save = $choose_us->save();
        if($save){
          return redirect('author/manage/choose_us')->with('message','update data successfully!');
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
        $choose_us = Choose_us::find($id);
        if($choose_us->image){
            unlink("frontend/img/choose_us/".$choose_us->image);
        }
        $delete = $choose_us->delete();
        if($delete){
          return redirect('author/manage/choose_us')->with
          ('message','This data delete successfully!');
        }
        else{
         return redirect()->back()->with('message_warring','something is wrong!');
        }
    }
}
