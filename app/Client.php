<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $fillable = ['name', 'last_name'];
    //
    public function compras()
    {
    	$this->hasMany(VentasDetail::class, 'client_id');
    }
}
