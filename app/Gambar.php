<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
     public function about()
    {
        return $this->belongsToMany('App\About');
    }
}
