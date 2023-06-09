<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\CodePromotion;
use App\Models\Promotion;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/promotions/{id}', function (Request $request, $id) {
    // AquÃ­ puedes hacer lo que necesites con los datos que llegan en la solicitud
    $userId = $request->input('user_id');
    $codePromotion = CodePromotion::where('user_id', $userId)->where('promotion_id', $id)->first();

    if ($codePromotion) {
        return response('Codigo Promocional ya generado.');
    }

    $codePromotion = new CodePromotion;
    $codePromotion->user_id = $userId;
    $codePromotion->promotion_id = $id;

    $uniqueId = uniqid(); 
    $hash = hash('sha256', $uniqueId); 

    $codePromotion->code = $hash;
    $codePromotion->active = false;
    $codePromotion->save();

    return response('Codigo Promocional generado exitosamente.');
});

Route::get('/codepromotions/{id}', function (Request $request, $id) {
    $codePromotion = CodePromotion::where('user_id', $id)->get();

    return response($codePromotion);
});

Route::put('/codepromotions/{id}', function ($id) {
    $codePromotion = CodePromotion::find($id);

    if (!$codePromotion) {
        return response()->json(['error' => 'Codigo Promocional no encontrado.'], 404);
    }

    if ($codePromotion->active) {
        return response('Codigo Promocional ya canjeado.');
    }

    $codePromotion->active = true;
    $codePromotion->save();

    return response('Codigo Promocional actualizado.');
});

Route::get('/promotions', function (Request $request) {
    $promotions = Promotion::all();
    return response($promotions);
});