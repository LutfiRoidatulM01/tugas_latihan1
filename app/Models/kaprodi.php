<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kaprodi extends Model
{
    use HasFactory;
    protected $table = 'kaprodi';
    protected $fillable = [
        'id',
        'user_id',
        'kode_dosen',
        'nip',
        'name',
    ];
}
