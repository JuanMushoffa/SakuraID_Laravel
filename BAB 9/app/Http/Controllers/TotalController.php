<?php

namespace App\Http\Controllers;

use App\Models\Total;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TotalController extends Controller
{
    public function index()
    {
        $total = Total::all();
        return view('total.total', compact('total'));
    }

    public function create()
    {
        return view('total.total-entry');
    }

    public function store(Request $request)
    {
       $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'jenis_kompensasi' => 'required',
            'biaya_kompensasi' => 'required',
            'total_kompensasi' => 'required',
        ]);
        Total::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'jenis_kompensasi' => $request->jenis_kompensasi,
            'biaya_kompensasi' => $request->biaya_kompensasi,
            'total_kompensasi' => $request->total_kompensasi,
        ]);

        return redirect('/totals');
    }

    public function edit($id_total)
    {
        $total = Total::find($id_total);
        return view('total.total-edit', compact('total'));
    }

    public function update(Request $request, $id_total)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'jenis_kompensasi' => 'required',
            'biaya_kompensasi' => 'required',
            'total_kompensasi' => 'required',
        ]);

        $total = Total::find($id_total);

        $total->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'jenis_kompensasi' => $request->jenis_kompensasi,
            'biaya_kompensasi' => $request->biaya_kompensasi,
            'total_kompensasi' => $request->total_kompensasi,
        ]);

        return redirect('/totals');
    }

    public function delete($id_total)
    {
        $total = Total::find($id_total);
        return view('total.total-hapus', compact('total'));
    }

    public function destroy($id_total)
    {
        $total = Total::find($id_total);
        $total->delete();
        return redirect('/totals');
    }

}
