<?php

namespace App\Models\order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    //the customer belogTo order
    public function meta()
    {
        return $this->hasOne(OrderMeta::class);
        //return $this->hasOne('App\Customer','id');
    }
    public function product(){
        return $this->belongsToMany(Product::class);
    }
}
