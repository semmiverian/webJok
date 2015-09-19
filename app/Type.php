<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['produk_id','name'];

    public function produk()
    {
    	return $this->hasMany('App\Produk');
    }
}
