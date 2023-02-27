<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Blog_Category;

class Blog_CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_cat = Blog_Category::latest()->get();
        return view('backend_page.blog_category.manage_blog_category',compact('blog_cat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend_page.blog_category.create_blog_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|max:255',
        ]);
        $blog_cat = new Blog_Category;
        $blog_cat->category_name = $request->category_name;
        $save = $blog_cat->save();
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
        $blog_cat = Blog_Category::find($id);
        return view('backend_page.blog_category.update_blog_category',compact('blog_cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'category_name' => 'required|max:255',
        ]);
        $blog_cat = Blog_Category::find($id);
        $blog_cat->category_name = $request->category_name;
        $save = $blog_cat->save();
        if($save){
          return redirect('author/manage/blog/category')->with('message','update data successfully!');
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
        $blog_cat = Blog_Category::find($id);
        $save = $blog_cat->delete();
        if($save){
          return redirect('author/manage/blog/category')->with('message','delete data successfully!');
        }
        else{
          return redirect()->back()->with('message','Something is Wrong!');
        }
    }
}
