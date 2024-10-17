<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{

    public function create()
    {
        $dosens = dosen::all();
        return view('kelas.create', compact('dosens'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'dosen_id' => 'nullable|exists:dosen,id', 
        ]);

        $kelas = kelas::create([
            'name' => $request->name,
            'jumlah' => $request->jumlah,
            'dosen_id' => $request->dosen_id, 
        ]);

        if ($request->dosen_id) {
            $dosen = Dosen::find($request->dosen_id);
            $dosen->kelas_id = $kelas->id; 
            $dosen->save();
        }

        return redirect()->route('kaprodi')->with('success', 'Kelas berhasil ditambahkan.');
    }
    

    public function edit($id)
    {
        $kelas = kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jumlah' => 'required|integer',
        ]);

        $kelas = kelas::findOrFail($id);
        $kelas->name = $request->name;
        $kelas->jumlah = $request->jumlah;
        $kelas->save();

        return redirect()->route('kaprodi')->with('success', 'Data kelas berhasil diupdate.');
    }

    public function destroy($id)
    {

        $kelas = kelas::findOrFail($id);

        if ($kelas->dosen) {
            $dosen = dosen::find($kelas->dosen->id);
            $dosen->kelas_id = null;
            $dosen->save();
        }

        $kelas->delete();
        return redirect()->route('kaprodi')->with('success');
    }
}
