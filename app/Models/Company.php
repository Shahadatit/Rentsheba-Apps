<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['company_name','slug','views','cuntry','establish','employer','website','com_mobile','cat_id','description','tags','main_product',
    'main_title','market','c_address','c_district','c_zipcode','p_name','p_email','p_phone','o_name','o_email','o_phone','cover_photo','facebook','instagram','linkedin','pinterest',
    'user_id','packeg','admin_company','status'];

    

    public function categorys(){
        return $this->belongsTo(Category::class,'cat_id');
    }
    public function cuntrys(){
        return $this->belongsTo(Cuntry::class,'cuntry');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public static function companyCount(){
        $compa = Company::where('status',1)->count();
        return $compa;
    }

    
}
