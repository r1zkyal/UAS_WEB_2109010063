<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{

    public function store(Request $request)
    {
        $data = $request->validate([
            'phone_number' => ['required', 'alpha_num'],
            'name' => ['required'],
        ]);
        
        Pasien::create($data);
        return redirect('/')->with('berhasil', "berhasil menambahkan data pasien");
    }

    public function update(Request $request, Pasien $pasien)
    {
        $data = $request->validate([
            'phone_number' => ['required', 'alpha_num'],
            'name' => ['required'],
        ]);
        
        $pasien->update($data);
        return redirect('/')->with('berhasil', "berhasil mengedit data pasien");
    }


    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect('/')->with('berhasil', "berhasil menghapus data pasien");
    }
}
