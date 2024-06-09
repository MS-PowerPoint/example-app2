<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[NavigationController::class, 'catalog']);

Route::get('/WaitingList',[NavigationController::class, 'waitinglist']);

Route::get('/Basket',[NavigationController::class, 'basket']);

Route::get('/Help',[NavigationController::class, 'help']);



// Route::get('/', function () {
//     return view('index.index');
// });
// Route::get('/',[CategoryController::class, 'index']);


//
// Route::get('/schoolboys',[ProductController::class, 'index']);


// Route::get('/schools/create',[CategoryController::class, 'create']);
// Route::post('/schools',[CategoryController::class, 'store']);


// //
// Route::get('/schoolboys/create',[ProductController::class, 'create']);
// Route::post('/schoolboys',[ProductController::class, 'store']);


// Route::get('/schools/{school}', [CategoryController::class, 'show']);

// //
// Route::get('/schoolboys/{schoolboy}', [ProductController::class, 'show']);


// Route::get('/schools/{school}/update',[CategoryController::class, 'edit']);
// Route::patch('/schools/{school}/update',[CategoryController::class, 'update']);


// //
// Route::get('/schoolboys/{schoolboy}/update',[ProductController::class, 'edit']);
// Route::patch('/schoolboys/{schoolboy}/update',[ProductController::class, 'update']);

// Route::delete('/schools/{school}', [CategoryController::class, 'destroy'])->name('schools.delete');

// //
// Route::delete('/schoolboys/{schoolboy}', [ProductController::class, 'destroy'])->name('schoolboy.delete');
