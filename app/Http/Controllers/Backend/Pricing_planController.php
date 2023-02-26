<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Plan;
use App\Models\Backend\Pricing_plan;

class Pricing_planController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricing_plan = Pricing_plan::first()->get();
        return view('backend_page.pricing_plan.manage_price_plan',compact('pricing_plan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plan = Plan::latest()->get();
        return view('backend_page.pricing_plan.create_pricing_plan',compact('plan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'plan_id' => 'required|max:255',
            'features_name' => 'required|max:255',
            'feature_available' => 'required|max:255',
        ]);

        $pricing_plan = new Pricing_plan();
        $pricing_plan->plan_id = $request->plan_id;
        $pricing_plan->features_name = $request->features_name;
        $pricing_plan->feature_available = $request->feature_available;
        $save = $pricing_plan->save();
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
        $pricing_plan = Pricing_plan::find($id);
        $plan = Plan::latest()->get();
        return view('backend_page.pricing_plan.update_pricing_plan',compact('plan','pricing_plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'plan_id' => 'required|max:255',
            'features_name' => 'required|max:255',
            'feature_available' => 'required|max:255',
        ]);

        $pricing_plan = Pricing_plan::find($id);
        $pricing_plan->plan_id = $request->plan_id;
        $pricing_plan->features_name = $request->features_name;
        $pricing_plan->feature_available = $request->feature_available;
        $save = $pricing_plan->save();
        if($save){
          return redirect('author/manage/pricing_plan')->with('message','update data successfully!');
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
        $pricing_plan = Pricing_plan::find($id);
        $save = $pricing_plan->delete();
        if($save){
          return redirect('author/manage/pricing_plan')->with('message','delete data successfully!');
        }
        else{
          return redirect()->back()->with('message','Something is Wrong!');
        }
    }
}
