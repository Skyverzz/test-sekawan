<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $siswa = Siswa::all();
        return view('Tables.siswa', [
            'siswa' => $siswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $siswa = Siswa::create([
            'Nama' => $request->Nama,
            'Jenis_kelamin' => $request->Jenis_kelamin,
            'Alamat' => $request->Alamat
        ]);
        if ($siswa) {
            return redirect()->back();
        }else{
            echo 'data gagal disimpan';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ID)
    {
        //
        $siswa = Siswa::where('ID',$ID)->delete();
        if ($siswa) {
            return redirect()->back();
        }else{
            echo 'ada kesalaha periksa kembali';
        }
    }
}
