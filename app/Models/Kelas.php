<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Jurusan;
class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jurusan_id',
    ];

    public function Jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
}
