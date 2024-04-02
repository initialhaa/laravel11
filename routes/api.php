<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use OpenApi\Annotations as OA;
/**
 * @OA\Info(title="My First API", version="0.1")
 */
return [
    /**
     * @OA\Get(
     *     path="/api/v1/test",
     *     @OA\Response(response="200", description="An example resource")
     * )
     */
    'GET api/v1/test' => 'test/index',
];

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
