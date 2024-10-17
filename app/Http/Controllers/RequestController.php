<?php

namespace App\Http\Controllers;


use App\Models\mahasiswa;
use App\Models\RequestModel;
use Illuminate\Http\Request;

class RequestController extends Controller
{

    public function index()
    {
        $requests = RequestModel::whereHas('mahasiswa', function ($query) {
            $query->where('kelas_id', auth()->user()->dosen->kelas_id);
        })->with('mahasiswa')->get();

        return view('request.index', compact('requests'));
    }

    public function create($mahasiswa_id)
    {
        $mahasiswa = Mahasiswa::findOrFail($mahasiswa_id);
        return view('request.create', compact('mahasiswa'));
    }

    public function store(Request $request, $mahasiswaId)
    {
        $validatedData = $request->validate([
            'keterangan' => 'required|string|max:255',
        ]);
        $mahasiswa = Mahasiswa::findOrFail($mahasiswaId);

        RequestModel::create([
            'mahasiswa_id' => $mahasiswa->id,
            'kelas_id' => $mahasiswa->kelas_id,
            'keterangan' => $validatedData['keterangan'],
        ]);
        return redirect()->back()->with('success', 'Request edit data berhasil dikirim.');
    }

    public function approve($id)
    {
        $request = RequestModel::findOrFail($id);
        $mahasiswa = $request->mahasiswa;
        $mahasiswa->edit = true;
        $mahasiswa->save();
        $request->delete();

        return redirect()->route('request.index')->with('success', 'Request telah disetujui.');
    }

    public function reject(Request $request, $id)
    {
 
        $requestToReject = RequestModel::findOrFail($id);

        // Ambil data mahasiswa yang terkait
        $mahasiswa = $requestToReject->mahasiswa;

        // Update status edit mahasiswa menjadi false
        $mahasiswa->edit = false; // Atur kembali tombol edit menjadi false
        $mahasiswa->save();

        // Hapus permintaan
        $requestToReject->delete();

        return redirect()->route('request.index')->with('success', 'Permintaan edit telah ditolak.');
    }

}
