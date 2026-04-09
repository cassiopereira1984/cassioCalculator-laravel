<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CalculadoraController extends Controller
{
    public function calcular(Request $request): JsonResponse
    {
        // Validar que los datos recibidos sean correctos
        $request->validate([
            'numero1'   => 'required|numeric',
            'numero2'   => 'required|numeric',
            'operacion' => 'required|in:suma,resta,multiplicacion,division',
        ]);

        $a = $request->numero1;
        $b = $request->numero2;

        // Realizar la operación correspondiente
        $resultado = match($request->operacion) {
            'suma'           => $a + $b,
            'resta'          => $a - $b,
            'multiplicacion' => $a * $b,
            'division'       => $b != 0 ? $a / $b : null,
        };

        // Caso especial: división por cero
        if ($resultado === null) {
            return response()->json([
                'error' => 'División por cero no permitida'
            ], 422);
        }

        // Devolver el resultado en JSON
        return response()->json([
            'numero1'   => $a,
            'numero2'   => $b,
            'operacion' => $request->operacion,
            'resultado' => $resultado,
        ]);
    }
}