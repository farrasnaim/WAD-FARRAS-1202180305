<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = "orders";
    public function products(){
        return $this->belongsTo('App\Models\products','product_id','id');
}
}