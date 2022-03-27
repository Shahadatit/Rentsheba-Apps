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
        $request->validate([
            'company_name'  => ['required', 'string', 'max:30'],
            'cuntry'        => ['required'],
            'com_mobile'    => ['required'],
            'c_address'     => ['required', 'string'],
            'c_district'    => ['required', 'string'],
            'c_zipcode'     => ['required'],
            'main_title'    => ['required', 'string', 'max:42'],
            'cat_id'        => ['required'],
            'description'   => ['required', 'string', 'max:301'],
            'o_phone'       => ['required'],
            'cover_photo'          => ['required'],
            
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
        $companys->packeg               = $request->packeg1;
        $companys->user_id              = $request->user_id;

        if( $request->cover_photo){
            $imgCatch = $request->file('cover_photo');
            $imgName = time() . '_' . $imgCatch->getClientOriginalName();
            $location = public_path('image/' . $imgName);
            Image::make($imgCatch)->resize(1200, 800)->save($location);
            $companys->cover_photo = $imgName;

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
        $request->validate([
            'company_name'  => ['required', 'string', 'max:30'],
            'com_mobile'    => ['required', 'string'],
            'c_address'     => ['required', 'string'],
            'c_district'    => ['required', 'string'],
            'c_zipcode'     => ['required'],
            'main_title'    => ['required', 'string', 'max:42'],
            'cat_id'        => ['required'],
            'description'   => ['required', 'string', 'max:301'],
            'o_phone'       => ['required'],
            
        ],[
            'company_name.required'  => "Company Name required",
            'com_mobile.required'    => "Company Mobile required",
            'c_address.required'     => "Company Address required",
            'c_district.required'    => "Company District required",
            'c_zipcode.required'     => "Company Zip Code required",
            'main_title.required'    => "Main Title required",
            'cat_id.required'        => "Category required",
            'description.required'   => "Description required",
            'o_phone.required'       => "Required Number ",
        ]);

        $companys = Company::find($id);
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
        $companys->packeg               = $request->packeg1;
        $companys->user_id              = $request->user_id;

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
