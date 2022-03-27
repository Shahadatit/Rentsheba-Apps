<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cuntry;
use App\Models\adminPost;
use App\Models\Company;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;
use DB;

class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $categorys = Category::orderby('name','asc')->where('status',1)->where('is_parent',0)->get();
        $companys  = Company::where('status',1)->inRandomOrder()->get();
       
        return view('frontend.pages.home',compact('categorys','companys'));
    }

    
    public function businessList()
    {
        $companys = Company::where('status',1)->inRandomOrder()->get();
        return view('frontend.pages.business-list',compact('companys'));
    }

    public function businessDetails($slug)
    {
        $company = Company::where('slug', $slug)->first();
        if( !empty($company)){
            $category = $company->cat_id;
            $adminPosts = adminPost::where('status',1)->where('cat_id',$category)->latest()->get();
            return view('frontend.pages.business-details',compact('company','adminPosts'));
        }
        
    }
    public function primaryCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        if( !empty($category)){
            return view('frontend.pages.category-wish',compact('category'));
        }
        
    }

    public function blogList()
    {
        $adminPosts = adminPost::where('status',1)->inRandomOrder()->limit(6)->get();
        return view('frontend.pages.blog-list',compact('adminPosts'));
    }

    public function blogDetails($slug)
    {
        $post = adminPost::where('slug', $slug)->first();
        if(!empty($post)){
            return view('frontend.pages.blog-details',compact('post'));
        }else{
            return back();
        }
        
    }

    public function userDashboard()
    {
        $cuntrys = Cuntry::orderby('name','asc')->where('status',1)->get();
        $business = Company::where('user_id', Auth::id())->get();
        return view('frontend.pages.user.dashboard',compact('cuntrys','business'));
    }

    // All ambulance function class
    public function ambulanceService()
    {
        return view('frontend.pages.ambulance.ambulance-service');
    }
    public function acAmbulance()
    {
        return view('frontend.pages.ambulance.ac-ambulance');
    }
    public function nonAcAmbulance()
    {
        return view('frontend.pages.ambulance.ac-ambulance');
    }
    public function freezingAmbulance()
    {
        return view('frontend.pages.ambulance.freezing');
    }
    public function icuAmbulance()
    {
        return view('frontend.pages.ambulance.icu-ambulance');
    }

    // IT service function class
    public function webDesign()
    {
        return view('frontend.pages.it-service.web-design');
    }
    public function webDevelopment()
    {
        return view('frontend.pages.it-service.web-development');
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
        //
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
        //
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
