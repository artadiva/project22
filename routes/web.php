<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/page2', function () {
    return view('page2');
})->name('page2');
// Route::get('/input_pasien_baru', function () {
//     return view('input_pasien_baru');
// // })->name('input_pasien_baru');
Route::get('/update_data_pasien', function () {
    return view('update_data_pasien');
})->name('update_data_pasien');
// Route::get('/data_pasien', function () {
//     return view('data_pasien');
// })->name('data_pasien');
Route::get('/rekap_pasien_harian', function () {
    return view('rekap_pasien_harian');
})->name('rekap_pasien_harian');
// Route::get('/data_kunjungan', function () {
//     return view('data_kunjungan');
// })->name('data_kunjungan');
// Route::get('/tambah_kunjungan/{id_pasien}', function () {
//     return view('tambah_kunjungan');
// })->name('tambah_kunjungan');
// Route::get('/master_suspect', function () {
//     return view('master_suspect');
// })->name('master_suspect');
// Route::get('/master_diagnosa', function () {
//     return view('master_diagnosa');
// })->name('master_diagnosa');
// Route::get('/master_diet', function () {
//     return view('master_diet');
// })->name('master_diet');

// Route::get('/input_master_suspect', function () {
//     return view('input_master_suspect');
// })->name('input_master_suspect');
// Route::get('/input_master_diagnosa', function () {
//     return view('input_master_diagnosa');
// })->name('input_master_diagnosat');
// Route::get('/input_master_diet', function () {
//     return view('input_master_diet');
// })->name('input_master_diet');
//contoh
Route::group(['prefix' => 'master_suspect'], function () {
    Route::get('/', [App\Http\Controllers\MasterSuspectController::class, 'index'])->name('master_suspect.index');
    Route::get('/create', [App\Http\Controllers\MasterSuspectController::class, 'create'])->name('master_suspect.create');
    Route::post('/store', [App\Http\Controllers\MasterSuspectController::class, 'store'])->name('master_suspect.store');
    Route::get('/edit/{id}', [App\Http\Controllers\MasterSuspectController::class, 'edit'])->name('master_suspect.edit');
    Route::post('/update/{id}', [App\Http\Controllers\MasterSuspectController::class, 'update'])->name('master_suspect.update');
    Route::get('/destroy/{id}', [App\Http\Controllers\MasterSuspectController::class, 'destroy'])->name('master_suspect.destroy');
    Route::get('/select2options', [App\Http\Controllers\MasterSuspectController::class, 'select2options'])->name('master_suspect.select2options');
    
});
//contoh
//buat baru untuk master xxx
//ganti semua master_suspect menjadi masete xxx
// duplixcate mastersuspect.php di model, ganti nama dengan master xxx, ingat ganti nama class, nama $table
// dup mastersuspectcontroller dengan nama baru ingat ganti classnya dan semua kara master suspect diganti menjadi nama baru
// duplicate view/master_suspect/ semua file didalamnya si blade sesuakan namanya

Route::group(['prefix' => 'master_diet'], function () {
    Route::get('/', [App\Http\Controllers\MasterDietController::class, 'index'])->name('master_diet.index');
    Route::get('/create', [App\Http\Controllers\MasterDietController::class, 'create'])->name('master_diet.create');
    Route::post('/store', [App\Http\Controllers\MasterDietController::class, 'store'])->name('master_diet.store');
    Route::get('/edit/{id}', [App\Http\Controllers\MasterDietController::class, 'edit'])->name('master_diet.edit');
    Route::post('/update/{id}', [App\Http\Controllers\MasterDietController::class, 'update'])->name('master_diet.update');
    Route::get('/destroy/{id}', [App\Http\Controllers\MasterDietController::class, 'destroy'])->name('master_diet.destroy');
    Route::get('/select2options', [App\Http\Controllers\MasterDietController::class, 'select2options'])->name('master_diet.select2options');
});
//buat baru untuk master xxx

Route::group(['prefix' => 'master_diagnosa'], function () {
    Route::get('/', [App\Http\Controllers\MasterDiagnosaController::class, 'index'])->name('master_diagnosa.index');
    Route::get('/create', [App\Http\Controllers\MasterDiagnosaController::class, 'create'])->name('master_diagnosa.create');
    Route::post('/store', [App\Http\Controllers\MasterDiagnosaController::class, 'store'])->name('master_diagnosa.store');
    Route::get('/edit/{id}', [App\Http\Controllers\MasterDiagnosaController::class, 'edit'])->name('master_diagnosa.edit');
    Route::post('/update/{id}', [App\Http\Controllers\MasterDiagnosaController::class, 'update'])->name('master_diagnosa.update');
    Route::get('/destroy/{id}', [App\Http\Controllers\MasterDiagnosaController::class, 'destroy'])->name('master_diagnosa.destroy');
    Route::get('/select2options', [App\Http\Controllers\MasterDiagnosaController::class, 'select2options'])->name('master_diagnosa.select2options');
});

Route::group(['prefix' => 'master_keluhan'], function () {
    Route::get('/', [App\Http\Controllers\MasterKeluhanController::class, 'index'])->name('master_keluhan.index');
    Route::get('/create', [App\Http\Controllers\MasterKeluhanController::class, 'create'])->name('master_keluhan.create');
    Route::post('/store', [App\Http\Controllers\MasterKeluhanController::class, 'store'])->name('master_keluhan.store');
    Route::get('/edit/{id}', [App\Http\Controllers\MasterKeluhanController::class, 'edit'])->name('master_keluhan.edit');
    Route::post('/update/{id}', [App\Http\Controllers\MasterKeluhanController::class, 'update'])->name('master_keluhan.update');
    Route::get('/destroy/{id}', [App\Http\Controllers\MasterKeluhanController::class, 'destroy'])->name('master_keluhan.destroy');
    Route::get('/select2options', [App\Http\Controllers\MasterKeluhanController::class, 'select2options'])->name('master_keluhan.select2options');
});

Route::group(['prefix' => 'data_pasien'], function () {
    Route::get('/', [App\Http\Controllers\DataPasienController::class, 'index'])->name('data_pasien.index');
    Route::get('/create', [App\Http\Controllers\DataPasienController::class, 'create'])->name('data_pasien.create');
    Route::post('/store', [App\Http\Controllers\DataPasienController::class, 'store'])->name('data_pasien.store');
    Route::get('/edit/{id}', [App\Http\Controllers\DataPasienController::class, 'edit'])->name('data_pasien.edit');
    Route::post('/update/{id}', [App\Http\Controllers\DataPasienController::class, 'update'])->name('data_pasien.update');
    Route::get('/destroy/{id}', [App\Http\Controllers\DataPasienController::class, 'destroy'])->name('data_pasien.destroy');
});
Route::group(['prefix' => 'data_kunjungan'], function () {
    Route::get('/', [App\Http\Controllers\DataKunjunganController::class, 'index'])->name('data_kunjungan.index');
    Route::get('/create/{id}', [App\Http\Controllers\DataKunjunganController::class, 'create'])->name('data_kunjungan.create');
    Route::post('/store', [App\Http\Controllers\DataKunjunganController::class, 'store'])->name('data_kunjungan.store');
    Route::get('/edit/{id}', [App\Http\Controllers\DataKunjunganController::class, 'edit'])->name('data_kunjungan.edit');
    Route::post('/update/{id}', [App\Http\Controllers\DataKunjunganController::class, 'update'])->name('data_kunjungan.update');
    Route::get('/destroy/{id}', [App\Http\Controllers\DataKunjunganController::class, 'destroy'])->name('data_kunjungan.destroy');
    Route::get('/print', [App\Http\Controllers\DataKunjunganController::class, 'print'])->name('data_kunjungan.print');
});
Route::group(['prefix' => 'master_rule'], function () {
    Route::get('/', [App\Http\Controllers\MasterRuleController::class, 'index'])->name('master_rule.index');
    Route::get('/create', [App\Http\Controllers\MasterRuleController::class, 'create'])->name('master_rule.create');
    Route::post('/store', [App\Http\Controllers\MasterRuleController::class, 'store'])->name('master_rule.store');
    Route::get('/edit/{id}', [App\Http\Controllers\MasterRuleController::class, 'edit'])->name('master_rule.edit');
    Route::post('/update/{id}', [App\Http\Controllers\MasterRuleController::class, 'update'])->name('master_rule.update');
    Route::get('/destroy/{id}', [App\Http\Controllers\MasterRuleController::class, 'destroy'])->name('master_rule.destroy');
});
    Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/input_pasien_baru', [App\Http\Controllers\PasienController::class, 'index'])->name('input_pasien_baru');
