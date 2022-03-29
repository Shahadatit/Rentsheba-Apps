<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoriti extends Model
{
    use HasFactory;

    protected $fillable = ['post_id','company_id','user_id','status'];

    public function company(){
        return $this->belongsTo(Company::class , 'company_id');
    }
}
