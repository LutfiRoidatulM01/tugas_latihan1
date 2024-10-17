<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use App\Models\kelas;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaprodiController extends Controller
{

    function index(){
        $dosen = dosen::all();
        $kelas = kelas::with('dosen')->get();

        $dosen = dosen::with('kelas')->get();
       
        $jumlahDosen = Dosen::count(); // Menghitung jumlah dosen
        $jumlahMahasiswa = Mahasiswa::count(); // Menghitung jumlah mahasiswa
        $jumlahKelas = Kelas::count(); // Menghitung jumlah kelas

        return view('kaprodi.index', compact('dosen', 'jumlahDosen', 'jumlahMahasiswa', 'jumlahKelas'), ['kelas' => $kelas]);
    }

    function kaprodi(){
        $dosen = dosen::all();
        $kelas = kelas::with('dosen')->get();

        $dosen = dosen::with('kelas')->get();
        $totalDosen = dosen::count();

        return view('kaprodi.index', compact('dosen'), ['kelas' => $kelas]);
    }

    function dosen_wali(){
        $mahasiswa = mahasiswa::all();
        return view('dosen.index', ['mahasiswa' => $mahasiswa]);
    }

    
    function mahasiswa(){
        $user = auth()->user();
          $userId = auth()->id();
    
          $mahasiswa = mahasiswa::where('user_id', $userId)->first();
        
          $kelas = kelas::all();
        return view('mahasiswa.index',['mahasiswa' => $mahasiswa], ['kelas' => $kelas]);


    }
}
