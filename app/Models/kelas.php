<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = [
        'id',
        'name',
        'jumlah',
    ];

    public function dosen()
    {
        return $this->belongsTo(dosen::class, 'id', 'kelas_id');
    }
}
