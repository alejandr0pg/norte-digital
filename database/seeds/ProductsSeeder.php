<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [
    		['name' => 'Bebida Cocacola 1LT'],
    		['name' => 'Bebida Cocacola 2LT'],
    		['name' => 'Bebida Cocacola 3LT'],
    	];

    	foreach( $products as $product){
            //
            $product = DB::table('products')->insert([
                'name' => $product['name']
            ]);
        
        }

    }
}
