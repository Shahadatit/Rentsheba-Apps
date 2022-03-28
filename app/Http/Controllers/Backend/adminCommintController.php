<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\companyComment;
use Illuminate\Http\Request;

class adminCommintController extends Controller
{
  
    // Post Comment list
    public function postComment()
    {
        $comments = Comment::all();
        return view('backend.pages.comment.manage',compact('comments'));
    }


    // Company Comment list
    public function companyComment()
    {
        $comments = companyComment::all();
        return view('backend.pages.comment.companycomment',compact('comments'));
    }
   
    // Post Comment Update 
    public function update(Request $request, $id)
    {
        $comments = Comment::find($id);
        $comments->comment = $request->comment;
        $comments->status = $request->status;
        $comments->save();
        return redirect()->back();
    }
 
    // Company Comment Update
    public function companyupdate(Request $request, $id)
    {
        $comments = companyComment::find($id);
        $comments->comment  = $request->comment;
        $comments->status   = $request->status;

        $comments->save();
        return redirect()->back();
    }

   
    // Post Comment Delete
    public function destroy($id)
    {
        $destroy = Comment::find($id);
        if(!empty($destroy)){
            $destroy->delete();
        }
        return back();
    }

    // Company Comment Delete
    public function companydestroy($id)
    {
        $destroy = companyComment::find($id);
        if(!empty($destroy)){
            $destroy->delete();
        }
        return back();
    }
}
