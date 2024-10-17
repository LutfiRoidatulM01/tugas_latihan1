<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dosen extends Model
{
    use HasFactory;
    use Notifiable; 
    protected $table = 'dosen';
    protected $fillable = [
        'id',
        'user_id',
        'kelas_id',
        'kode_dosen',
        'nip',
        'name',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($dosen) {
            if ($dosen->user) {
                $dosen->user->delete();
            }
        });
    }
}
