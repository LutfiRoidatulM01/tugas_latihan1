<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\dosen;
use App\Models\kelas;
use App\Models\mahasiswa;
use App\Models\RequestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{

    public function index()
    {

        $dosen = Auth::user()->dosen;

        if (!$dosen || !$dosen->kelas_id) {
            return redirect()->back()->with('error', 'Anda tidak mengasuh kelas saat ini.');
        }

        $requests = RequestModel::where('kelas_id', $dosen->kelas_id)->get();
        $mahasiswa = Mahasiswa::with('kelas', 'user')->get();

        return view('dosen.index', compact('requests', 'mahasiswa'));
    }


    public function create()
    {
        $kelas = kelas::all();

        return view('dosen.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:dosen,nip',
            'name' => 'required',
            'kode_dosen' => 'required|unique:dosen,kode_dosen',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',

        ]);
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'dosen_wali',
        ]);

        Dosen::create([
            'nip' => $request->nip,
            'name' => $request->name,
            'kode_dosen' => $request->kode_dosen,
            'user_id' => $user->id,
            'kelas_id' => $request->kelas_id ?: null,
        ]);

        return redirect()->route('kaprodi')->with('success', 'Dosen berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $dosen = dosen::findOrFail($id);
        $kelas = kelas::all();
        return view('dosen.edit', compact('dosen', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required|integer',
            'name' => 'required|string|max:255',
            'kode_dosen' => 'required|string|max:50',
            'kelas_id' => 'nullable|integer',
        ]);

        $dosen = dosen::findOrFail($id);
        $dosen->nip = $request->nip;
        $dosen->name = $request->name;
        $dosen->kode_dosen = $request->kode_dosen;
        $dosen->kelas_id = $request->kelas_id;
        $dosen->save();

        return redirect()->route('kaprodi')->with('success', 'Data Dosen berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $dosen = dosen::findOrFail($id);

        $dosen->delete();

        return redirect()->route('kaprodi')->with('success');
    }

    public function editMahasiswa(Request $request, $nim)
    {
        $dosenWali = auth()->user()->dosen;
        $mahasiswa = Mahasiswa::where('nim', $nim)
            ->where('kelas_id', $dosenWali->kelas_id)
            ->firstOrFail();

        return view('dosen.edit_mahasiswa', compact('mahasiswa'));
    }

    public function updateMahasiswa(Request $request, $nim)
    {
        $dosenWali = auth()->user()->dosen;

        $mahasiswa = Mahasiswa::where('nim', $nim)
            ->where('kelas_id', $dosenWali->kelas_id)
            ->firstOrFail();

        $request->validate([
            'nim' => 'required|numeric|unique:mahasiswa,nim,' . $mahasiswa->id,
            'email' => 'required|email|unique:users,email,' . $mahasiswa->user->id,
            'name' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
        ]);

        $mahasiswa->update([
            'nim' => $request->input('nim'),
            'name' => $request->input('name'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
        ]);

        $mahasiswa->user->update([
            'email' => $request->input('email'),
        ]);

        return redirect()->route('dosen.index')->with('success', 'Data mahasiswa berhasil diupdate.');
    }
}
