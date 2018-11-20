<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $appends = ['total'];

    protected $hidden = ['created_at', 'updated_at', 'client_id'];

	public function details()
	{
		return $this->hasMany(VentasDetail::class, 'venta_id');
	}
    //
    public function getTotalAttribute()
    {
    	$total = 0;

    	foreach ($this->details as $detalles) {
    		$total += $detalles->sub_total;
    	}

    	return $total;
    }
}
