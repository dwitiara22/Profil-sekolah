<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaProka extends Model
{
    use HasFactory;

    protected $fillable = [
        'proka_id',
        'nama_kepala',
        'nip',
        'foto',
        'periode_mulai',
        'periode_selesai'
    ];

    // Relasi: Kepala Proka ini milik dari Proka mana
    public function proka()
    {
        return $this->belongsTo(Proka::class);
    }
}
