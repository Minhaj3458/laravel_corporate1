<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Plan;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plan = Plan::latest()->get();
        return view('backend_page.plan.manage_plan',compact('plan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend_page.plan.create_plan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'price' => 'required|max:255',
            'title' => 'required|max:255',
            'plan' => 'required|max:255',
        ]);
        $plan_item = new Plan;
        $plan_item->title = $request->title;
        $plan_item->price = $request->price;
        $plan_item->plan = $request->plan;
        $save = $plan_item->save();
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
        $plan = Plan::find($id);
        return view('backend_page.plan.update_plan',compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'plan' => 'required|max:255',
            'price' => 'required|max:255',
        ]);
        $plan_item = Plan::find($id);
        $plan_item->title = $request->title;
        $plan_item->plan = $request->plan;
        $plan_item->price = $request->price;
        $save = $plan_item->save();
        if($save){
          return redirect('author/manage/plan')->with('message','create data successfully!');
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
        $plan_item = Plan::find($id);
        $save = $plan_item->delete();
        if($save){
          return redirect('author/manage/plan')->with('message','delete data successfully!');
        }
        else{
          return redirect()->back()->with('message','Something is Wrong!');
        }
    }
}
