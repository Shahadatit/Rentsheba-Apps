<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['post_id','user_id','comment','star','status'];

    // Commetn belong User
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    // comment belong post
    public function post(){
        return $this->belongsTo(adminPost::class,'post_id');
    }

    public function comment(){
        $return = Comment::where('status',1)->count();
        return $return;
    }
}
