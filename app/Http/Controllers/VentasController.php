<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;

class VentasController extends Controller
{
    //

    public function index(Request $request)
    {
    	// Obtenemos todos los detalles de las ventas.
    	$ventas = Venta::with(['details'])->get();

    	// Respondemos el json
    	return response()->json($ventas);
    }
}
