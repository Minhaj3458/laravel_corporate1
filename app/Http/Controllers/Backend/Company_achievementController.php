<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Company_achievement;

class Company_achievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achiev = Company_achievement::latest()->get();
        return view('backend_page.company_achievement.manage_achievement',compact('achiev'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend_page.company_achievement.create_achievement');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'total_count' => 'required|max:255',
        ]);

        $achiev = new Company_achievement;
        $achiev->title = $request->title;
        $achiev->total_count = $request->total_count;
        $save = $achiev->save();
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
        $achiev = Company_achievement::find($id);
        return view('backend_page.company_achievement.update_achievement',compact('achiev'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'total_count' => 'required|max:255',
        ]);

        $achiev = Company_achievement::find($id);
        $achiev->title = $request->title;
        $achiev->total_count = $request->total_count;
        $save = $achiev->save();
        if($save){
          return redirect('author/manage/achiev')->with('message','update data successfully!');
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
        $achiev = Company_achievement::find($id);
        $save = $achiev->delete();
        if($save){
          return redirect('author/manage/achiev')->with('message','delete data successfully!');
        }
        else{
          return redirect()->back()->with('message','Something is Wrong!');
        }
    }
}
