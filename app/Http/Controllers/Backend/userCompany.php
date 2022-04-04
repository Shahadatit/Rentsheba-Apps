<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Category;
use App\Models\Cuntry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;
use Auth;

class userCompany extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businessList = Company::all();
        return view('backend.pages.business.manage',compact('businessList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all();
        $cuntrys  = Cuntry::all();
        return view('backend.pages.business.create',compact('categorys','cuntrys'));
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
            'company_name'  => ['required', 'string', 'max:30','unique:companies'],
            'com_mobile'    => ['required', 'string'],
            'c_address'     => ['required', 'string'],
            'c_district'    => ['required', 'string'],
            'c_zipcode'     => ['required'],
            'main_title'    => ['required', 'string', 'max:42'],
            'description'   => ['required', 'string', 'max:301'],
            'o_phone'       => ['required'],
            
        ]);

        $companys = new Company();
        $companys->company_name         = $request->company_name;
        $companys->slug                 = Str::slug($request->company_name);
        $companys->cuntry               = $request->country;
        $companys->website              = $request->website;
        $companys->com_mobile           = $request->com_mobile;
        $companys->c_address            = $request->c_address;
        $companys->c_district           = $request->c_district;
        $companys->c_zipcode            = $request->c_zipcode;
        $companys->main_title           = $request->main_title;
        $companys->cat_id               = $request->cat_id;
        $companys->description          = $request->description;
        $companys->tags                 = $request->tags;
        $companys->o_name               = $request->o_name;
        $companys->o_email              = $request->o_email;
        $companys->o_phone              = $request->o_phone;
        $companys->facebook             = $request->facebook;
        $companys->instagram            = $request->instagram;
        $companys->linkedin             = $request->linkedin;
        $companys->pinterest            = $request->pinterest;
        $companys->packeg               = $request->packeg;

        if( $request->cover_photo){

           
            $imgCatch = $request->file('cover_photo');
            $imgName = time() . '_' . $imgCatch->getClientOriginalName();
            $location = public_path('image/' . $imgName);
            Image::make($imgCatch)->resize(1200, 800)->save($location);
            $companys->cover_photo = $imgName;

        }

       

        $companys->save();
        return redirect()->route('business.index')->with('success','Create Successfull');



        
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
        $business = Company::find($id);
        if(!empty($business)){
            $categorys = Category::all();
            $cuntrys  = Cuntry::all();
            return view('backend.pages.business.edit',compact('categorys','cuntrys','business'));
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
            'company_name'  => ['required', 'string', 'max:30'],
            'com_mobile'    => ['required', 'string'],
            'c_address'     => ['required', 'string'],
            'c_district'    => ['required', 'string'],
            'c_zipcode'     => ['required'],
            'main_title'    => ['required', 'string', 'max:42'],
            'description'   => ['required', 'string', 'max:301'],
            'o_phone'       => ['required'],
        ]);

        $companys =  Company::find($id);
        $companys->company_name         = $request->company_name;
        $companys->slug                 = Str::slug($request->company_name);
        $companys->cuntry               = $request->country;
        $companys->website              = $request->website;
        $companys->com_mobile           = $request->com_mobile;
        $companys->c_address            = $request->c_address;
        $companys->c_district           = $request->c_district;
        $companys->c_zipcode            = $request->c_zipcode;
        $companys->main_title           = $request->main_title;
        $companys->cat_id               = $request->cat_id;
        $companys->description          = $request->description;
        $companys->tags                 = $request->tags;
        $companys->o_name               = $request->o_name;
        $companys->o_email              = $request->o_email;
        $companys->o_phone              = $request->o_phone;
        $companys->facebook             = $request->facebook;
        $companys->instagram            = $request->instagram;
        $companys->linkedin             = $request->linkedin;
        $companys->pinterest            = $request->pinterest;
        $companys->packeg               = $request->packeg;

        if( $request->cover_photo){

            if( File::exists('image/'. $companys->cover_photo)){
                File::delete('image/'. $companys->cover_photo);
            }
           
            $imgCatch = $request->file('cover_photo');
            $imgName = time() . '_' . $imgCatch->getClientOriginalName();
            $location = public_path('image/' . $imgName);
            Image::make($imgCatch)->resize(1200, 800)->save($location);
            $companys->cover_photo = $imgName;

        }

       

        $companys->save();
        return redirect()->route('business.index')->with('success','Create Successfull');
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
