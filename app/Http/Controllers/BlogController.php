<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        // dd($blog);
        return view('welcome', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' =>'required',
            'content' =>'sometimes',
            'author' =>'sometimes',
        ]);

        // $blog = Blog::all();
        $blog = Blog::create($data);
        
        return redirect('blogs')->with('success', 'saved successfully');



        // return $title;
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        // dd($blog);
        return view('show' ,compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('edit' ,compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {

        $data = $request->validate([
            'title' =>'required',
            'content' =>'sometimes',
            'author' =>'sometimes',
        ]);

        // $blog = Blog::all();
        $blog->update($data);
        
        return redirect('blogs')->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('blogs')->with('success', 'Deleted successfully');

    }
}
