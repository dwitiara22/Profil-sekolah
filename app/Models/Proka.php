<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proka extends Model
{
    use HasFactory;

    protected $fillable = ['nama_proka'];

    // Relasi: Satu Proka bisa memiliki beberapa riwayat Kepala Proka
    public function kepalaProka()
    {
        return $this->hasMany(KepalaProka::class);
    }
}
