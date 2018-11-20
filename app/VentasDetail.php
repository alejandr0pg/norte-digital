<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentasDetail extends Model
{
    protected $appends = ['client', 'product'];

    protected $hidden = ['client_id', 'product_id', 'venta_id', 'created_at', 'updated_at', 'cliente', 'producto'];

	protected $fillable = ['client_id','product_id','quantity','price','sub_total','venta_id'];
    //
    public function cliente()
    {
    	return $this->belongsTo(Client::class, 'client_id');
    }

    public function producto()
    {
    	return $this->belongsTo(Product::class, 'product_id');
    }

    public function getClientAttribute()
    {
        return $this->cliente->name . ' ' . $this->cliente->last_name;
    }

    public function getProductAttribute()
    {
        return $this->producto->name;
    }
}
