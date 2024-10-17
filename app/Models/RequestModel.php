<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestModel extends Model
{
    use HasFactory;
    protected $table = 'request';
    protected $fillable = [
        'kelas_id',
        'mahasiswa_id',
        'keterangan',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id');
    }
}
