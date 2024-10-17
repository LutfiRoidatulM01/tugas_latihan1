<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kelas;
use App\Models\mahasiswa;
use App\Models\RequestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        $kelas = kelas::all();
        $mahasiswa = Mahasiswa::with('kelas')->get();
        $mahasiswa = Mahasiswa::with('user')->get();
        $mahasiswa = Mahasiswa::where('user_id', auth()->id())->first();
        
      return view('mahasiswa.index',compact('mahasiswa', 'kelas'), ['mahasiswa' => $mahasiswa], ['kelas' => $kelas]);
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $kelas = Kelas::all(); 
    
        return view('mahasiswa.edit', compact('mahasiswa', 'kelas'));
    }


    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswa.create', compact('kelas'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim',
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'kelas_id' => 'required|exists:kelas,id',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'mahasiswa', 
        ]);

 
        Mahasiswa::create([
            'user_id' => $user->id,
            'nim' => $request->nim,
            'name' => $request->name,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kelas_id' => $request->kelas_id,
        ]);
        return redirect()->route('dosen.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    


    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'name' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update([
            'nim' => $request->nim,
            'name' => $request->name,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kelas_id' => $request->kelas_id,
            'edit' => false, 
        ]);

        if ($mahasiswa->user) {
            $mahasiswa->user->update(['email' => $request->email]);
        }

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    public function destroy($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();

        $mahasiswa->delete();
    
        if ($mahasiswa->user) {
            $mahasiswa->user->delete();
        }
    
        return redirect()->route('dosen.index')->with('success');
    }
    

}
