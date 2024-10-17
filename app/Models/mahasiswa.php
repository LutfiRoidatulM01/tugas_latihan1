<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = [
        'id',
        'user_id',
        'kelas_id',
        'nim',
        'name',
        'tempat_lahir',
        'tanggal_lahir',
        'edit',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id');
    }

    public function requests()
    {
        return $this->hasMany(RequestModel::class, 'mahasiswa_id');
    }
    
}
