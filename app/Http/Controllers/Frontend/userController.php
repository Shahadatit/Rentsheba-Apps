<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Cuntry;
use Illuminate\Http\Request;
use File;
use Image;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::find($id);
        if(!empty($user)){
            $countrys = Cuntry::orderby('name','asc')->where('status',1)->get();
            return view('frontend.pages.user.edit-profile',compact('user','countrys'));
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
        $users = User::find($id);
        $users->name        = $request->name;
        $users->last_name   = $request->last_name;
        $users->address     = $request->address;
        $users->phone       = $request->phone;
        $users->city        = $request->city;
        $users->cuntry      = $request->cuntry;
        $users->zip_code    = $request->post_code;
        $users->description = $request->description;

        if($request->image){
            $catchImg = $request->file('image');
            $imgName = time()."_". $catchImg->getClientOriginalName();
            $location = public_path('image/' . $imgName);
            Image::make($catchImg)->resize(200,200)->save($location);
            $users->profile = $imgName;
        }
        $users->save();
        return redirect()->back()->with('success', 'Update Profile');
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
