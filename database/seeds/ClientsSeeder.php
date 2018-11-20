<?php

use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
    		['name' => 'Jesus', 'last_name' => 'Cardenas'],
    		['name' => 'Alejandro', 'last_name' => 'Pérez'],
    		['name' => 'Angeles', 'last_name' => 'Herrera'],
    	];

    	foreach( $clients as $data){
            //
            $client = DB::table('clients')->insert([
                'name' => $data['name'],
                'last_name' => $data['last_name']
            ]);
        
        }
    }
}
