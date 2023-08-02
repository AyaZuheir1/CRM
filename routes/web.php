<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


// عرض قائمة بجميع جهات الاتصال
Route::get('/home', [ContactController::class,'index'])->name('contacts.index');

// عرض نموذج إنشاء جهة اتصال جديدة
Route::get('/contacts/create', [ContactController::class,'create'])->name('contacts.create');

// إنشاء جهة اتصال جديدة
Route::post('/contacts', [ContactController::class,'store'])->name('contacts.store');

// عرض جهة اتصال محددة
Route::get('/contacts/{contact}', [ContactController::class,'show'])->name('contacts.show');

// عرض نموذج التحديث لجهة اتصال محددة
Route::get('/contacts/{contact}/edit', [ContactController::class,'edit'])->name('contacts.edit');

// تحديث جهة اتصال محددة
Route::put('/contacts/{contact}', [ContactController::class,'update'])->name('contacts.update');

// حذف جهة اتصال محددة
Route::delete('/contacts/{contact}', [ContactController::class,'destroy'])->name('contacts.destroy');