<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Kelas;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'nama',
        'kelas_id'
    ];

    public function Kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}

