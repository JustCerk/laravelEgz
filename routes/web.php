<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\RegistListController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PVMTypeController;
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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//saskaitu rinkiniai
Route::get('/gaunamos', [RegistListController::class, "gaunamos"]
)->middleware(['auth', 'verified'])->name('gaunamos');

Route::get('/israsomos', [RegistListController::class, "israsomos"]
)->middleware(['auth', 'verified'])->name('israsomos');


Route::get('/newgaunamos',[PeriodController::class, "gautiPirY1"])
->middleware(['auth', 'verified'])->name('newgaunamos');

Route::post('/newgaunamos', [RegistListController::class,"store1"])
->middleware(['auth', 'verified'])->name('newgaunamos');

Route::get('/newisrasomos',[PeriodController::class, "gautiPirY2"])
->middleware(['auth', 'verified'])->name('newisrasomos');

Route::post('/newisrasomos', [RegistListController::class,"store2"])
->middleware(['auth', 'verified'])->name('newisrasomos');


Route::get('/keistiGaun/{id}',[RegistListController::class, "keisti1"])
->middleware(['auth', 'verified'])->name('keistiGaun');

Route::post('/keistiGaun',[RegistListController::class, "update1"])
->middleware(['auth', 'verified'])->name('keistiGaun');


Route::get('/keistiIsras/{id}',[RegistListController::class, "keisti2"])
->middleware(['auth', 'verified'])->name('keistiIsras');

Route::post('/keistiIsras',[RegistListController::class, "update2"])
->middleware(['auth', 'verified'])->name('keistiIsras');


Route::get('/Trinti/{id}',[RegistListController::class, "destroy"])
->middleware(['auth', 'verified'])->name('keistiGaun');

//saskaitos
Route::get('/VisosSask/{id}',[InvoiceController::class, "pateikti"])
->middleware(['auth', 'verified'])->name('keistiGaun');

Route::get('/newinvoice/{id}',[PVMTypeController::class, "gautiPVMtypes"])
->middleware(['auth', 'verified'])->name('newinvoice');

Route::post('/newinvoice', [InvoiceController::class,"store"])
->middleware(['auth', 'verified'])->name('newinvoice');


Route::get('/keistiSask/{id}',[InvoiceController::class, "keisti"])
->middleware(['auth', 'verified'])->name('keistiSask');

Route::post('/keistiSask',[InvoiceController::class, "update"])
->middleware(['auth', 'verified'])->name('keistiSask');


Route::get('/TrintiSask/{id}',[InvoiceController::class, "destroy"])
->middleware(['auth', 'verified'])->name('TrintiSask');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
