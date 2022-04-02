<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cuntry;
use App\Models\adminPost;
use App\Models\Company;
use App\Models\Category;
use App\Models\CompanyComment;
use App\Models\Favoriti;
use App\Models\Comment;
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
        $posts = adminPost::where('status',1)->where('cat_id',2)->inRandomOrder()->limit(3)->get();
       
        return view('frontend.pages.home',compact('categorys','companys','posts'));
    }

    
    public function businessList()
    {
        $companys = Company::where('status',1)->inRandomOrder()->paginate(8);
        $adminPost = adminPost::where('status',1)->inRandomOrder()->limit(6)->get();
        return view('frontend.pages.business-list',compact('companys','adminPost'));
    }

    public function businessDetails($slug)
    {
        $company = Company::where('slug', $slug)->first();
        if( !empty($company)){
            $category = $company->cat_id;
            $company->increment('views');
            $comments = CompanyComment::orderby('id','desc')->where('company_id', $company->id)->get();
            $adminPost = adminPost::where('status',1)->inRandomOrder()->limit(6)->get();
            $adminPosts = adminPost::where('status',1)->where('cat_id',$category)->latest()->get();
            return view('frontend.pages.business-details',compact('company','adminPosts','adminPost','comments'));
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
            
            $adminPost = adminPost::where('status',1)->inRandomOrder()->limit(6)->get();
            $post->increment('views');
            $comments = Comment::orderby('id','desc')->where('status',1)->where('post_id', $post->id)->get();
            return view('frontend.pages.blog-details',compact('post','adminPost','comments'));
        }else{
            return back();
        }
        
    }

    public function search(Request $request){

        $busines = Company::where('main_title','LIKE','%'.$request->search.'%');
        if($request->category != "ALL"){
            $busines->where('cat_id',$request->category);
        }
        $companys  = $busines->paginate(10);
        return view('frontend.pages.search',compact('companys'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function termsofCondition()
    {
        return view('frontend.pages.terms-condition');
    }
    public function privacyPolicy()
    {
        return view('frontend.pages.privacy-policy');
    }


    public function userDashboard()
    {
        $favoritis = Favoriti::orderby('id','desc')->where('user_id',Auth::id())->where('status',1)->get();
        $cuntrys = Cuntry::orderby('name','asc')->where('status',1)->get();
        $business = Company::where('user_id', Auth::id())->get();
        return view('frontend.pages.user.dashboard',compact('cuntrys','business','favoritis'));
    }

    // Domain Function class 
    public function domainNameSearch(){
        return view('frontend.pages.domain.domain-search');
    }
    public function webHosting(){
        return view('frontend.pages.domain.webhosting');
    }
    public function wordPressHosting(){
        return view('frontend.pages.domain.wordpress-hosting');
    }
    public function vpsHosting(){
        return view('frontend.pages.domain.vps-hosting');
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
        return view('frontend.pages.ambulance.non-ac-ambulance');
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
    public function localSeoService()
    {
        return view('frontend.pages.it-service.local-seo');
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
