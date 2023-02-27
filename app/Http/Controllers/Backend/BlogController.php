<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Backend\Blog_Category;
use App\Models\Backend\Blog;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::latest()->get();
        return view('backend_page.blog.manage_blog',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blog_cat = Blog_Category::latest()->get();
        return view('backend_page.blog.create_blog',compact('blog_cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|max:255',
            'blog_category_id' => 'required|max:255',
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
        ]);

        $blog = new Blog();
        $blog->user_id = Auth::id();
        $blog->title = $request->title;
        $blog->blog_category_id = $request->blog_category_id;
        $blog->description = $request->description;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/blog/'),$image_name);
            $blog->image = $image_name;
        }
        $save = $blog->save();
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
        $blog = Blog::find($id);
        $blog_cat = Blog_Category::latest()->get();
        return view('backend_page.blog.update_blog',compact('blog','blog_cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'blog_category_id' => 'required|max:255',
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
        ]);
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->blog_category_id = $request->blog_category_id;
        $blog->description = $request->description;
        if($request->hasfile('image'))
        {
            if($blog->image){
                $img_delete = Blog::where("image",$blog->image);
                if($img_delete){
                  unlink("frontend/img/blog/".$blog->image);
                 }
               }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/blog/'),$image_name);
            $blog->image = $image_name;
        }
        $save = $blog->save();
        if($save){
          return redirect('author/manage/blog')->with('message','update data successfully!');
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
        $blog = Blog::find($id);
        if($blog->image){
            unlink("frontend/img/blog/".$blog->image);
        }
        $delete =$blog->delete();
        if($delete){
            return redirect('author/manage/blog')->with('message','update data successfully!');
        }
        else{
          return redirect()->back()->with('message','Something is Wrong!');
        }
    }
}
