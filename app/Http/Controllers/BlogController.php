<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy("id", "desc")->paginate(5);
        return view('blogs.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy("id", "desc")->get();
        return view('blogs.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required|min:3',
            'description' => 'required|min:10',
            'categories'  => 'required',
        ]);

        Blog::create([
            "name"        => $request->name,
            "description" => $request->description,
            "categories"  => implode(",", $request->categories)
        ]);
        return redirect(route('blog.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $categories      = explode(",", $blog->categories);
        $categories_name = "";
        foreach ($categories as $value)
        {
            $categories_name .= Category::find($value)->category_name . ", ";
        }
        if ($categories_name)
        {
            $categories_name = trim($categories_name, ", ");
        }
        $blog->categories = $categories_name;
        return view('blogs.show', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::orderBy("id", "desc")->get();
        //$blog->categories = explode(",", $blog->categories);
        return view('blogs.edit', ['blog' => $blog, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->name        = $request->name;
        $blog->description = $request->description;
        $blog->categories  = implode(",", $request->categories);

        $blog->save();

        session()->flash('message', 'Your blog has been updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        session()->flash('message', 'Your blog has been deleted successfully');

        return redirect(route('blog.index'));
    }

    public function search(Request $request)
    {
        $blog_name = $request->search_name;
        $blog_desc = $request->search_description;
        $blog_date = $request->search_date;
        
        $blog = new Blog();
        $search_result = $blog->search_data($blog_name, $blog_desc, $blog_date);
        
        return $search_result;
    }

}
