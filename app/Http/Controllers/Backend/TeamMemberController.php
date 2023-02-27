<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\TeamMember;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team_member = TeamMember::latest()->get();
        return view('backend_page.team_member.manage_team_member',compact('team_member'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend_page.team_member.create_team_member');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|max:255',
            'designation' => 'required|max:255',
        ]);

        $team_member = new TeamMember;
        $team_member->name = $request->name;
        $team_member->designation = $request->designation;
        $team_member->facebook = $request->facebook;
        $team_member->instagram = $request->instagram;
        $team_member->twitter = $request->twitter;
        $team_member->linkedin = $request->linkedin;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/team_member/'),$image_name);
            $team_member->image = $image_name;
        }
        $save = $team_member->save();
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
        $team_member = TeamMember::find($id);
        return view('backend_page.team_member.update_team_member',compact('team_member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
        ]);

        $team_member = TeamMember::find($id);
        $team_member->name = $request->name;
        $team_member->designation = $request->designation;
        $team_member->facebook = $request->facebook;
        $team_member->instagram = $request->instagram;
        $team_member->twitter = $request->twitter;
        $team_member->linkedin = $request->linkedin;
        if($request->hasfile('image'))
        {
            if($team_member->image){
                $img_delete = TeamMember::where("image",$team_member->image);
                if($img_delete){
                  unlink("frontend/img/team_member/".$team_member->image);
                 }
               }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/team_member/'),$image_name);
            $team_member->image = $image_name;
        }
        $save = $team_member->save();
        if($save){
          return redirect('author/manage/team_member')->with('message','update data successfully!');
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
        $team_member = TeamMember::find($id);
        if($team_member->image){
            unlink("frontend/img/team_member/".$team_member->image);
        }
        $delete = $team_member->delete();
        if($delete){
            return redirect('author/manage/team_member')->with('message','delete data successfully!');
        }
        else{
          return redirect()->back()->with('message','Something is Wrong!');
        }
    }
}
