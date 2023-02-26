<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Plan;
class HomeController extends Controller
{
    public function index()
    {
        $plan = Plan::latest()->get();
        return view('frontend_pages.index',compact('plan'));
    }
    public function about()
    {
        return view('frontend_pages.about');
    }
    public function contact()
    {
        return view('frontend_pages.contact');
    }
    public function mission()
    {
        return view('frontend_pages.mission');
    }
    public function vission()
    {
        return view('frontend_pages.vission');
    }
    public function services()
    {
        return view('frontend_pages.services');
    }
    public function team_members()
    {
        return view('frontend_pages.team_members');
    }

}
