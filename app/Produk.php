<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
     protected $fillable = ['image','nama','harga','telepon','detail'];
}
