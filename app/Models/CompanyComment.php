<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyComment extends Model
{
    use HasFactory;

    protected $fillable = ['company_id','user_id','comment','star','status'];

    public function company(){
        return $this->belongsTo(Company::class , 'company_id');
    }
    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function review(){
        $return = CompanyComment::where('status',1)->count();
        return $return;
    }
}
