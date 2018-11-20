<?php

use Illuminate\Database\Seeder;

use App\Venta;

class VentasTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ventas = [
        	[
        		'client_id' => 2
        	],
        	[
        		'client_id' => 2
        	],
        	[
        		'client_id' => 2
        	]
        ];

        foreach($ventas as $venta) {
        	$_venta = Venta::create([
        		'client_id' => $venta['client_id']
        	]);
        }
    }
}
