<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;


abstract class Controller
{
    public function response($data): JsonResponse
    {
        return response()->json([
            'data' => $data,
        ]);
    }

    public function success(string $message, $data = null): JsonResponse
    {
        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => $message ?? 'operation successfull',
            'data' => $data,
        ]);
    }
    public function error(string $message, $data = null): JsonResponse
    {
        return response()->json([
            'success' => false,
            'status' => 'error',
            'message' => $message ?? 'error occured',
            'data' => $data,
        ]);
    }
}
