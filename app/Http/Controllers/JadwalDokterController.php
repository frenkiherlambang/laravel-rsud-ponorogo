<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalDokterController extends Controller
{
    public function halamanJadwal()
    {
        $dokters = Dokter::all();
        // $dokters = DB::select('SELECT * FROM dokters');

        return view('jadwaldokter', ['dokters' => $dokters]);
    }

    public function createJadwal()
    {
        return view('createjadwal');
    }

    public function editJadwal($id)
    {
        $dokter = Dokter::find($id);
        return view('editjadwal', compact('dokter'));
    }

    public function updateJadwalToDB(Request $request, $id)
    {
        $dokter = Dokter::find($id);
        $dokter->update($request->all());
        return redirect()->back()->with('status', 'jadwal berhasil diperbarui');

    }

    public function insertJadwalToDB(Request $request)
    {
        Dokter::create($request->all());
        return redirect()->back()->with('status', 'jadwal berhasil ditambahkan');

    }

    public function deleteJadwal($id)
    {
        $dokter = Dokter::find($id);
        $dokter->delete();
        return redirect()->back()->with('status', 'jadwal dokter: '.$dokter->nama.' berhasil dihapus');

    }
}
