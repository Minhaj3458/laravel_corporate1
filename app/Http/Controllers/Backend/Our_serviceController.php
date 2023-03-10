<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Our_service;

class Our_serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $service = Our_service::latest()->get();
       return view('backend_page.our_service.manage_service',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend_page.our_service.create_service');
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

        $service = new Our_service;
        $service->title = $request->title;
        $service->description = $request->description;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/our_service/'),$image_name);
            $service->image = $image_name;
        }
        $save = $service->save();
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
        $service = Our_service::find($id);
        return view('backend_page.our_service.update_service',compact('service'));
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

        $service = Our_service::find($id);
        $service->title = $request->title;
        $service->description = $request->description;
        if($request->hasfile('image'))
        {
            if($service->image){
                $img_delete = Our_service::where("image",$service->image);
                if($img_delete){
                  unlink("frontend/img/our_service/".$service->image);
                 }
               }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/our_service/'),$image_name);
            $service->image = $image_name;
        }
        $save = $service->save();
        if($save){
          return redirect('author/manage/service')->with('message','Update data successfully!');
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
        $service = Our_service::find($id);
        if($service->image){
            unlink("frontend/img/our_service/".$service->image);
        }
        $delete = $service->delete();
        if($delete){
          return redirect('author/manage/service')->with
          ('message','This data delete successfully!');
        }
        else{
         return redirect()->back()->with('message_warring','something is wrong!');
        }

    }
}
