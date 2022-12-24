<?php
use App\Http\Controllers\Jobslistingcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('jobs',Jobslistingcontroller::class);
// Route::get('/jobs',[Jobslistingcontroller::class,'index']
// );
// Route::post('/jobs',[Jobslistingcontroller::class,'store']);
// Route::post('/jobs',[Jobslistingcontroller::class,'store']);
