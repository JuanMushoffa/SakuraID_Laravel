<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Kompensasi;

class KompensasiController extends Controller
{
    public function index()
    {
        $kompensasi = Kompensasi::all();

        return view('kompensasi.kompensasi', compact('kompensasi'));
    }
    public function cetak()
    {
        $kompensasi = Kompensasi::all();
        $pdf = Pdf::loadview('kompensasi.kompensasi-cetak', compact('kompensasi'));
        return $pdf->download('laporan-kompen.pdf');
    }
    public function create()
    {
        return view('kompensasi.kompensasi-entry');
    }

    public function store(Request $request)
    {
       $request->validate([
            'nama' => 'required',
            'jenis_kompensasi' => 'required',
            'biaya_kompensasi' => 'required',
            'total_kompensasi' => 'required',
        ]);
        Kompensasi::create([
            'nama' => $request->nama,
            'jenis_kompensasi' => $request->jenis_kompensasi,
            'biaya_kompensasi' => $request->biaya_kompensasi,
            'total_kompensasi' => $request->total_kompensasi,
        ]);

        return redirect('/kompensasi');
    }

    public function edit($id_kompensasi)
    {
        $kompensasi = Kompensasi::find($id_kompensasi);
        return view('kompensasi.kompensasi-edit', compact('kompensasi'));
    }

    public function update(Request $request, $id_kompensasi)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kompensasi' => 'required',
            'biaya_kompensasi' => 'required',
            'total_kompensasi' => 'required',
        ]);

        $kompensasi = Kompensasi::find($id_kompensasi);

        $kompensasi->update([
            'nama' => $request->nama,
            'jenis_kompensasi' => $request->jenis_kompensasi,
            'biaya_kompensasi' => $request->biaya_kompensasi,
            'total_kompensasi' => $request->total_kompensasi,
        ]);

        return redirect('/kompensasi');
    }

    public function delete($id_kompensasi)
    {
        $kompensasi = Total::find($id_kompensasi);
        return view('kompensasi.kompensasi-hapus', compact('kompensasi'));
    }

    public function destroy($id_kompensasi)
    {
        $kompensasi = Total::find($id_kompensasi);
        $kompensasi->delete();
        return redirect('/kompensasi');
    }
}
