<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimKerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'nip',
        'jabatan_di_tim',
        'kategori',
        'foto'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
