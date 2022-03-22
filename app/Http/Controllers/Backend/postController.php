<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\adminPost;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminPosts  = adminPost::all();
        return view('backend.pages.post.manage',compact('adminPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::orderby('name','asc')->where('is_parent',0)->get();
        return view('backend.pages.post.create',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new adminPost();
        
        $posts->name                = $request->name;
        $posts->discription         = $request->editor1;
        $posts->sort_description    = $request->sort_descriopton;
        $posts->cat_id              = $request->category;
        $posts->slug                = Str::slug($request->focus_keyword);
        $posts->focus_keyword       = $request->focus_keyword;
        // $posts->user_id             = $request->user_id;
        $posts->tags                = $request->tags;
        $posts->status              = $request->status;

        if( $request->image){
            $imgCatch = $request->file('image');
            $imgName = time() . '_' . $imgCatch->getClientOriginalName();
            $location = public_path('image/' . $imgName);
            Image::make($imgCatch)->save($location);
            $posts->image = $imgName;

        }

        $posts->save();
        return redirect()->route('post.index')->with('success','Create Successfull');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = adminPost::find($id);
        if( !empty($post)){
            $categorys = Category::orderby('name','asc')->where('is_parent',0)->get();
            return view('backend.pages.post.edit',compact('post','categorys'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posts = adminPost::find($id);
        
        $posts->name                = $request->name;
        $posts->discription         = $request->editor1;
        $posts->sort_description    = $request->sort_descriopton;
        $posts->cat_id              = $request->category;
        $posts->slug                = Str::slug($request->focus_keyword);
        $posts->focus_keyword       = $request->focus_keyword;
        // $posts->user_id             = $request->user_id;
        $posts->tags                = $request->tags;
        $posts->status              = $request->status;

        if( $request->image){
            
            if( File::exists('image/' . $posts->image)){
                File::delete('image/' . $posts->image);
            }

            $imgCatch = $request->file('image');
            $imgName = time() . '_' . $imgCatch->getClientOriginalName();
            $location = public_path('image/' . $imgName);
            Image::make($imgCatch)->save($location);
            $posts->image = $imgName;

        }

        $posts->save();
        return redirect()->route('post.index')->with('success','Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
