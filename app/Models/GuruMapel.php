<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Guru;
use App\Models\Mapel;

class GuruMapel extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id',
        'mapel_id',
    ];

    public function Guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }

    public function Mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }
}
