<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['company_name','slug','cuntry','establish','employer','website','com_mobile','cat_id','description','tags','main_product',
    'main_title','market','c_address','c_district','c_zipcode','p_name','p_email','p_phone','o_name','o_email','o_phone','logo',
    'user_id','packeg','admin_company','status'];

    public function categoryFunc(){
        return $this->belongsTo(Category::class,'cat_id');
    }
}
