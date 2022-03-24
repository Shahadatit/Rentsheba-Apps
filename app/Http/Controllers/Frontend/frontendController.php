<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cuntry;
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
        $companys  = DB::table('companies')->where('status',1)->inRandomOrder()->get();
       
        return view('frontend.pages.home',compact('categorys','companys'));
    }

    
    public function businessList()
    {
        return view('frontend.pages.business-list');
    }

    public function businessDetails($slug)
    {
        $company = Company::where('slug', $slug)->first();
        if( !empty($company)){
            return view('frontend.pages.business-details',compact('company'));
        }
        
    }

    public function blogList()
    {
        return view('frontend.pages.blog-list');
    }

    public function blogDetails()
    {
        return view('frontend.pages.blog-details');
    }

    public function userDashboard()
    {
        $cuntrys = Cuntry::orderby('name','asc')->where('status',1)->get();
        $business = Company::where('user_id', Auth::id())->get();
        return view('frontend.pages.user.dashboard',compact('cuntrys','business'));
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
