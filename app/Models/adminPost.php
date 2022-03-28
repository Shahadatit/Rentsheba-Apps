<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminPost extends Model
{
    use HasFactory;


    protected $fillable = ['name','slug','views','focus_keyword','discription','sort_description','cat_id','user_id','tags','image','status'];

    public function categoryFunction(){
        return $this->belongsTo(Category::class , 'cat_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

   
    
}
