<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Social_media;

class Social_mediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $media = Social_media::latest()->get();
        return view('backend_page.social_media.manage_social_media',compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend_page.social_media.create_social_media');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $media = new Social_media;
        $media->facebook = $request->facebook;
        $media->twitter = $request->twitter;
        $media->instagram = $request->instagram;
        $media->youtube = $request->youtube;
        $media->linkdin = $request->linkdin;
        $save =  $media->save();
        if($save){
          return redirect()->back()->with('message','create Data successfully!');
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
        $media = Social_media::find($id);
        return view('backend_page.social_media.update_social_media',compact('media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $media = Social_media::find($id);
        $media->facebook = $request->facebook;
        $media->twitter = $request->twitter;
        $media->instagram = $request->instagram;
        $media->youtube = $request->youtube;
        $media->linkdin = $request->linkdin;
        $save =  $media->save();
        if($save){
          return redirect('author/manage/media')->with('message','Update Data successfully!');
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
        $media = Social_media::find($id);
        $save =  $media->delete();
        if($save){
          return redirect('author/manage/media')->with('message','Delete Data Successfully!');
        }
        else{
          return redirect()->back()->with('message','Something is Wrong!');
        }
    }
}
