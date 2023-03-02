<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Plan;
use App\Models\Backend\Social_media;
use App\Models\Backend\Company_info;
use App\Models\Backend\Slider;
use App\Models\Backend\Company_achievement;
use App\Models\Backend\About_us;
use App\Models\Backend\Choose_us;
use App\Models\Backend\Our_service;
use App\Models\Backend\Testimonial;
use App\Models\Backend\TeamMember;
use App\Models\Backend\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $plan = Plan::latest()->get();
        $social_media = Social_media::latest()->get();
        $company_info = Company_info::latest()->get();
        $slider = Slider::latest()->get();
        $about = About_us::latest()->get();
        $choose_us = Choose_us::latest()->get();
        $our_service = Our_service::latest()->get();
        $testimonial = Testimonial::latest()->get();
        $teamember = TeamMember::latest()->get();
        $blog = Blog::latest()->get();
        $company_achievement = Company_achievement::latest()->get();
        return view('frontend_pages.index',compact('plan','social_media','company_info','slider',
        'company_achievement','about','choose_us','our_service','testimonial',
        'teamember','blog'));
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
