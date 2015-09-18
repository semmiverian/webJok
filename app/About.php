<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
     protected $fillable = ['gallery,gambar,detail'];

     public function gallery()
    {
        return $this->belongsToMany('App\Gambar');
    }
}
