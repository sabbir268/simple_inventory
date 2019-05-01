<?php

namespace App;
use App\User;
use App\Products;

use Illuminate\Database\Eloquent\Model;

class Supplying extends Model
{
    protected $guarded = [];

    public function supplyer(){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function product(){
        return $this->belongsTo(Products::class);
    }
}
