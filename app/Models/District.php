<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['naem','slug','division_id','status'];

    public function divisionFunc(){
        return $this->belongsTo(Division::class, 'division_id');
    }
}
