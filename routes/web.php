<?php

use App\Http\Controllers\PasienController;
use App\Models\Pasien;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    $pasiens = Pasien::orderBy('name')->paginate(5);
    return view('index', compact('pasiens'));
});

Route::get('/create', function() {
    return view('tambah-data');
});

Route::post('/create', [PasienController::class, 'store']);

Route::get('/edit/{pasien:id}', function(Pasien $pasien) {
    return view('edit-data', ['pasien' => $pasien]);
});

Route::delete('/hapus/{pasien:id}', [PasienController::class, 'destroy']);