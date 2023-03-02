<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Company_info;

class Company_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = Company_info::latest()->get();
        return view('backend_page.company_information.manage_info',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend_page.company_information.create_info');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|max:255',
            'number' => 'required|max:15',
            'address' => 'required|max:300',
            'description' => 'required|max:400',
            'company_logo1' => 'required|max:255',
        ]);

        $info = new Company_info;
        $info->email = $request->email;
        $info->number = $request->number;
        $info->description = $request->description;
        $info->address = $request->address;
        if($request->hasfile('company_logo1'))
        {
            $file = $request->file('company_logo1');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/logo/'),$image_name);
            $info->company_logo1 = $image_name;
        }
        if($request->hasfile('company_logo2'))
        {
            $file = $request->file('company_logo2');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/logo/'),$image_name);
            $info->company_logo2 = $image_name;
        }
        $save = $info->save();
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
        $info = Company_info::find($id);
        return view('backend_page.company_information.update_information',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'email' => 'required|max:255',
            'number' => 'required|max:15',
            'description' => 'required|max:400',
            'address' => 'required|max:300',
        ]);

        $info = Company_info::find($id);
        $info->email = $request->email;
        $info->number = $request->number;
        $info->description = $request->description;
        $info->address = $request->address;
        if($request->hasfile('company_logo1'))
        {
            if($info->company_logo1){
                $img_delete = Company_info::where("company_logo1",$info->company_logo1);
                if($img_delete){
                  unlink("frontend/img/logo/".$info->company_logo1);
                 }
               }
            $file = $request->file('company_logo1');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/logo/'),$image_name);
            $info->company_logo1 = $image_name;
        }
        if($request->hasfile('company_logo2'))
        {
            if($info->company_logo2){
                $img_delete = Company_info::where("company_logo2",$info->company_logo2);
                if($img_delete){
                  unlink("frontend/img/logo/".$info->company_logo2);
                 }
               }

            $file = $request->file('company_logo2');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/logo/'),$image_name);
            $info->company_logo2 = $image_name;
        }
        $save = $info->save();
        if($save){
          return redirect('author/manage/info')->with('message','update data successfully!');
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
        $info = Company_info::find($id);

        if($info->company_logo1){
            unlink("frontend/img/logo/".$info->company_logo1);
        }
        if($info->company_logo2){
            unlink("frontend/img/logo/".$info->company_logo2);
        }
        $delete = $info->delete();
        if($delete){
          return redirect('author/manage/info')->with
          ('message','This data delete successfully!');
        }
        else{
         return redirect()->back()->with('message_warring','something is wrong!');
        }

    }
}
