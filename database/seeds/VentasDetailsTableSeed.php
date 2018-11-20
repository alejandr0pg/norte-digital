<?php

use Illuminate\Database\Seeder;
use App\VentasDetail;

class VentasDetailsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ventas = [
        	[
                'product_id' => 2,
        		'client_id' => 2,
        		'venta_id' => 1,
        		'quantity' => 5,
        		'price' => 500
        	],
        	[
                'client_id' => 2,
        		'product_id' => 1,
        		'venta_id' => 1,
        		'quantity' => 2,
        		'price' => 200
        	],
        	[
                'client_id' => 2,
        		'product_id' => 2,
        		'venta_id' => 2,
        		'quantity' => 5,
        		'price' => 500
        	],
        	[
                'client_id' => 2,
        		'product_id' => 1,
        		'venta_id' => 2,
        		'quantity' => 2,
        		'price' => 200
        	],
        	[
                'client_id' => 2,
        		'product_id' => 3,
        		'venta_id' => 3,
        		'quantity' => 5,
        		'price' => 1500
        	],
        	[
                'client_id' => 2,
        		'product_id' => 1,
        		'venta_id' => 3,
        		'quantity' => 2,
        		'price' => 200
        	]
        ];

        foreach($ventas as $venta) {
        	$_venta = VentasDetail::create([
        		'product_id' => $venta['product_id'],
        		'quantity' => $venta['quantity'],
        		'price' => $venta['price'],
        		'sub_total' => $venta['price'] * $venta['quantity'],
                'venta_id' => $venta['venta_id'],
        		'client_id' => $venta['client_id']
        	]);
        }
    }
}
