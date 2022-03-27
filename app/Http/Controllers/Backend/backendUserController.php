<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cuntry;
use App\Models\User;
use Illuminate\Http\Request;
use Image;
use File;


class backendUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('backend.pages.user.manage',compact('users'));
    }

   
    public function edit($id)
    {
        $user = User::find($id);
        if(!empty($user)){
            $countrys = Cuntry::orderby('name','asc')->where('status',1)->get();
            return view('backend.pages.user.edit',compact('user','countrys'));
        }else{
            return back();
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
       $users  = User::find($id);
       $users->name         = $request->name;
       $users->last_name    = $request->last_name;
       $users->phone        = $request->phone;
       $users->address      = $request->address;
       $users->city         = $request->city;
       $users->cuntry       = $request->cuntry;
       $users->zip_code     = $request->zip_code;
       $users->role         = $request->role;
       $users->status       = $request->status;
       $users->description  = $request->description;

       if($request->profile){
           $catchImg = $request->file('profile');
           $imgName = time()."_" . $catchImg->getClientOriginalName();
           $location = public_path('image/' . $imgName);
           Image::make($catchImg)->save($location);
           $users->save();
       }
       $users->save();
       return redirect()->route('user.index')->with('success','update Successfull');
       
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
