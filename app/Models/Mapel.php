<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\GuruMapel;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama',
    ];

    public function guruMapel()
    {
        return $this->hasMany(GuruMapel::class, 'mapel_id');
    }
}
