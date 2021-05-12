<?php

use App\Http\Controllers\SearchController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/',function (){
    return view('welcome');
});


Route::get('/search', SearchController::class);
Route::get('/search/partial',[SearchController::class,'search']);


Route::get('/price',function (){

    return view('master',[
        'users'=>\App\Models\User::all(),
        'teams'=>\App\Models\Team::all()
    ]);

});

Route::get('partisal/price/{id}',function ($id){
    $users = \App\Models\User::where('current_team_id',$id)->get();
    return view('partisal/price',compact('users'));
});
