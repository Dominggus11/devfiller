<?php

use App\Http\Controllers\AdminAsController;
use App\Http\Controllers\AdminCipController;
use App\Http\Controllers\AdminCiwController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheklistAsSimplyController;
use App\Http\Controllers\CheklistCipSimplyController;
use App\Http\Controllers\CheklistCiwSimplyController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/',[SesiController::class, 'login']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/operator',[OperatorController::class, 'index'])->middleware('userAkses:operator');
    
    // untuk AS 
    Route::get('/operator/as',[CheklistAsSimplyController::class, 'index'])->middleware('userAkses:operator')->name('Operator.AsSimplies.index');
    Route::get('/operator/as/create', [CheklistAsSimplyController::class, 'create'])->middleware('userAkses:operator')->name('Operator.AsSimplies.create');
    Route::post('/operator/as/store', [CheklistAsSimplyController::class, 'store'])->middleware('userAkses:operator')->name('Operator.AsSimplies.store');
    Route::delete('/operator/as/destroy/{id}', [CheklistAsSimplyController::class, 'destroy'])->middleware('userAkses:operator')->name('Operator.AsSimplies.destroy');
    Route::get('/operator/as/edit/{id}', [CheklistAsSimplyController::class, 'edit'])->middleware('userAkses:operator')->name('Operator.AsSimplies.edit');
    Route::put('/operator/as/update/{id}', [CheklistAsSimplyController::class, 'update'])->middleware('userAkses:operator')->name('Operator.AsSimplies.update');

    // untuk CIP 
    Route::get('/operator/cip',[CheklistCipSimplyController::class, 'index'])->middleware('userAkses:operator')->name('Operator.CipSimplies.index');
    Route::get('/operator/cip/create', [CheklistCipSimplyController::class, 'create'])->middleware('userAkses:operator')->name('Operator.CipSimplies.create');
    Route::post('/operator/cip/store', [CheklistCipSimplyController::class, 'store'])->middleware('userAkses:operator')->name('Operator.CipSimplies.store');
    Route::delete('/operator/cip/destroy/{id}', [CheklistCipSimplyController::class, 'destroy'])->middleware('userAkses:operator')->name('Operator.CipSimplies.destroy');
    Route::get('/operator/cip/edit/{id}', [CheklistCipSimplyController::class, 'edit'])->middleware('userAkses:operator')->name('Operator.CipSimplies.edit');
    Route::put('/operator/cip/update/{id}', [CheklistCipSimplyController::class, 'update'])->middleware('userAkses:operator')->name('Operator.CipSimplies.update');

    // untuk CIP 
    Route::get('/operator/ciw',[CheklistCiwSimplyController::class, 'index'])->middleware('userAkses:operator')->name('Operator.CiwSimplies.index');
    Route::get('/operator/ciw/create', [CheklistCiwSimplyController::class, 'create'])->middleware('userAkses:operator')->name('Operator.CiwSimplies.create');
    Route::post('/operator/ciw/store', [CheklistCiwSimplyController::class, 'store'])->middleware('userAkses:operator')->name('Operator.CiwSimplies.store');
    Route::delete('/operator/ciw/destroy/{id}', [CheklistCiwSimplyController::class, 'destroy'])->middleware('userAkses:operator')->name('Operator.CiwSimplies.destroy');
    Route::get('/operator/ciw/edit/{id}', [CheklistCiwSimplyController::class, 'edit'])->middleware('userAkses:operator')->name('Operator.CiwSimplies.edit');
    Route::put('/operator/ciw/update/{id}', [CheklistCiwSimplyController::class, 'update'])->middleware('userAkses:operator')->name('Operator.CiwSimplies.update');

    // untuk admin lihat data 
    Route::get('/admin',[AdminController::class, 'index'])->middleware('userAkses:admin')->name('Admin.index');
    Route::get('/admin/as',[AdminAsController::class, 'viewAs'])->middleware('userAkses:admin')->name('Admin.AsSimplies.index');
    Route::get('/admin/cip',[AdminCipController::class, 'viewCip'])->middleware('userAkses:admin')->name('Admin.CipSimplies.index');
    Route::get('/admin/ciw',[AdminCiwController::class, 'viewCiw'])->middleware('userAkses:admin')->name('Admin.CiwSimplies.index');
    
    // untuk admin approve data 
    Route::get('/admin/as/approve/{id}', [AdminAsController::class, 'approveAs'])->middleware('userAkses:admin')->name('Admin.AsSimplies.edit');
    Route::get('/admin/cip/approve/{id}', [AdminCipController::class, 'approveCip'])->middleware('userAkses:admin')->name('Admin.CipSimplies.edit');
    Route::get('/admin/ciw/approve/{id}', [AdminCiwController::class, 'approveCiw'])->middleware('userAkses:admin')->name('Admin.CiwSimplies.edit');
    Route::put('/admin/as/update/{id}', [AdminAsController::class, 'updateAs'])->middleware('userAkses:admin')->name('Admin.AsSimplies.update');
    Route::put('/admin/cip/update/{id}', [AdminCipController::class, 'updateCip'])->middleware('userAkses:admin')->name('Admin.CipSimplies.update');
    Route::put('/admin/ciw/update/{id}', [AdminCiwController::class, 'updateCiw'])->middleware('userAkses:admin')->name('Admin.CiwSimplies.update');
    Route::get('/exportas/{id}', [AdminAsController::class, 'exportById'])->name('export');
    Route::get('/exportsas/by_date', [AdminAsController::class, 'exportByDate'])->name('export.by_date');
    Route::get('/exportcip/{id}', [AdminCipController::class, 'exportById'])->name('exportcip');
    Route::get('/exportscip/by_date', [AdminCipController::class, 'exportByDate'])->name('export.by_datecip');
    Route::get('/exportciw/{id}', [AdminCiwController::class, 'exportById'])->name('exportciw');
    Route::get('/exportsciw/by_date', [AdminCiwController::class, 'exportByDate'])->name('export.by_dateciw');
    Route::get('/logout',[SesiController::class, 'logout']);

});

