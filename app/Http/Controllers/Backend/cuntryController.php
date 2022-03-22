<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cuntry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class cuntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuntrys = Cuntry::all();
        return view('backend.pages.cuntry.manage',compact('cuntrys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.cuntry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuntrys = new Cuntry();
        $cuntrys->name        = $request->name;
        $cuntrys->slug        = Str::slug($request->name);
        $cuntrys->status      = $request->status;
        $cuntrys->save();
        return redirect()->route('cuntry.index');
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
        $cuntry = Cuntry::find($id);
        if( !empty($cuntry)){
            return view('backend.pages.cuntry.edit',compact('cuntry'));
        }else{
            return redirect()->back();
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
        $cuntrys = Cuntry::find($id);
        $cuntrys->name        = $request->name;
        $cuntrys->slug        = Str::slug($request->name);
        $cuntrys->status      = $request->status;
        $cuntrys->save();
        return redirect()->route('cuntry.index');
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
