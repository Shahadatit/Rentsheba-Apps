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
        $request->validate([
            'cat_id'            => "required",
            'name'              => ['required', 'string', 'max:55','unique:admin_posts'],
            'discription'       => "required",
            'sort_description'  => ['required'],
            'focus_keyword'     => ['required'],
            'image'             => ['required','mimes:jpg,png'],
            
        ],[
            'cat_id'                     => "Category required",
            'name.required'              => 'Post Title required',
            'discription.required'       => "Post Description required",
            'sort_description.required'  => "Sort Description required",
            'focus_keyword.required'    => "Focus Keyword required",
            'image.required'             => "Fiture Image required ",
        ]);

        $posts = new adminPost();
        $posts->name                = $request->name;
        $posts->discription         = $request->discription;
        $posts->sort_description    = $request->sort_description;
        $posts->cat_id              = $request->cat_id;
        $posts->slug                = Str::slug($request->focus_keyword);
        $posts->focus_keyword       = $request->focus_keyword;
        // $posts->user_id             = $request->user_id;
        $posts->tags                = $request->tags;
        $posts->status              = $request->status;

        if( $request->image){
            $imgCatch = $request->file('image');
            $imgName = time() . '_' . $imgCatch->getClientOriginalName();
            $location = public_path('image/' . $imgName);
            Image::make($imgCatch)->resize(1200, 800)->save($location);
            $posts->image = $imgName;

        }

        $posts->save();
        return redirect()->route('post.index')->with('success','Create Successfull');
        
        
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
        $request->validate([
            'cat_id'            => "required",
            'name'              => ['required', 'string', 'max:55'],
            'discription'       => "required",
            'sort_description'  => ['required'],
            'focus_keyword'     => ['required'],
          
        ],[
            'cat_id'                     => "Category field required",
            'name.required'              => 'Post Title required',
            'discription.required'       => "Post Description required",
            'sort_description.required'  => "Sort Description required",
            
            
        ]);


        $posts = adminPost::find($id);
        
        $posts->name                = $request->name;
        $posts->discription         = $request->discription;
        $posts->sort_description    = $request->sort_description;
        $posts->cat_id              = $request->cat_id;
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
            Image::make($imgCatch)->resize(1200, 800)->save($location);
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
