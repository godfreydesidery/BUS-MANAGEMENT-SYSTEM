<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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

Route::get('/test', function(Request $request){
    return 'Authenticated: My first php API';
});



Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/user', function(Request $request){
        return $request->user();
    });

    //Route::get('/companies', [CompanyController::class, 'index']);
    //Route::get('/companies/{company}', [CompanyController::class, 'show']);
    //Route::apiResource('/companies', CompanyController::class);

    /**Company API */
    Route::get('companies', [CompanyController::class, 'getAll']);
    Route::get('companies/get/{id}', [CompanyController::class, 'getById']);
    Route::get('companies/get_by_code/{code}', [CompanyController::class, 'getByCode']);
    Route::post('companies/create', [CompanyController::class, 'create']);
    Route::post('companies/update/{id}', [CompanyController::class, 'update']);
    Route::post('companies/delete/{id}', [CompanyController::class, 'delete']);
    Route::post('companies/lock/{id}', [CompanyController::class, 'lock']);
    Route::post('companies/unlock/{id}', [CompanyController::class, 'unlock']);

    /**Vehicle API */

});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
   // return $request->user();
//});
