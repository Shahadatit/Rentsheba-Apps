<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Cuntry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use File;
use Image;


class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Maximum one company add in this user 
         if(Auth::check()){
            $company = Company::where('user_id', Auth::id() )->first();
            if( !empty($company)){
                return redirect()->back();

            }else{
                $categorys = Category::orderby('name','asc')->where('status','1')->get();
                $countrys = Cuntry::orderby('name','asc')->where('status','1')->get();
                return view('frontend.pages.business.add-business',compact('categorys','countrys'));
                
            }
        }else{
            return redirect()->route('login')->with('success','Login First , Then Continue');
        }



        
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
        $companys = new Company();
        $companys->company_name         = $request->name;
        $companys->slug                 = Str::slug($request->name);
        $companys->cuntry               = $request->country;
        $companys->website              = $request->website;
        $companys->com_mobile           = $request->phone;
        $companys->c_address            = $request->address;
        $companys->c_district           = $request->district;
        $companys->c_zipcode            = $request->zip_code;
        $companys->main_title           = $request->main_title;
        $companys->cat_id               = $request->category;
        $companys->description          = $request->description;
        $companys->tags                 = $request->tags;
        $companys->o_name               = $request->o_name;
        $companys->o_email              = $request->o_email;
        $companys->o_phone              = $request->o_phone;
        $companys->facebook             = $request->facebook;
        $companys->instagram            = $request->instagram;
        $companys->linkedin             = $request->linkedin;
        $companys->pinterest            = $request->pinterest;
        $companys->packeg               = $request->packeg1;
        $companys->user_id              = $request->user_id;

        if( $request->image){
            $imgCatch = $request->file('image');
            $imgName = time() . '_' . $imgCatch->getClientOriginalName();
            $location = public_path('image/' . $imgName);
            Image::make($imgCatch)->save($location);
            $companys->logo = $imgName;

        }

        $companys->save();
        return redirect()->route('user-dashboard', Auth::id())->with('success','Create Successfull');
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
        $company = Company::find($id);
        if( !empty($company) ){
            $categorys = Category::orderby('name','asc')->where('status','1')->get();
            $countrys = Cuntry::orderby('name','asc')->where('status','1')->get();
             return view('frontend.pages.business.edit',compact('company','categorys','countrys'));
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
        $companys = Company::find($id);
        $companys->company_name         = $request->name;
        $companys->slug                 = Str::slug($request->name);
        $companys->cuntry               = $request->country;
        $companys->website              = $request->website;
        $companys->com_mobile           = $request->phone;
        $companys->c_address            = $request->address;
        $companys->c_district           = $request->district;
        $companys->c_zipcode            = $request->zip_code;
        $companys->main_title           = $request->main_title;
        $companys->cat_id               = $request->category;
        $companys->description          = $request->description;
        $companys->tags                 = $request->tags;
        $companys->o_name               = $request->o_name;
        $companys->o_phone               = $request->o_phone;
        $companys->facebook             = $request->facebook;
        $companys->instagram            = $request->instagram;
        $companys->linkedin             = $request->linkedin;
        $companys->pinterest            = $request->pinterest;
        $companys->packeg               = $request->packeg1;
        $companys->user_id              = $request->user_id;

        if( $request->image){

            if( File::exists('image/'. $companys->logo)){
                File::delete('image/'. $companys->logo);
            }
            $imgCatch = $request->file('image');
            $imgName = time() . '_' . $imgCatch->getClientOriginalName();
            $location = public_path('image/' . $imgName);
            Image::make($imgCatch)->save($location);
            $companys->logo = $imgName;

        }

        $companys->save();
        return redirect()->route('user-dashboard', Auth::id())->with('success','Create Successfull');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
