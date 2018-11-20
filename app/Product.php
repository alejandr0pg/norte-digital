<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function ventas()
    {
    	$this->hasMany(VentasDetail::class, 'product_id');
    }
}
